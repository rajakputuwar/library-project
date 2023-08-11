<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Booking;
use App\Models\IssueBook;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BookingController extends Controller
{

    public function index()
    {
        $bookings = Booking::orderBy('booked_on', 'desc')->get();
        return view('booking.index', compact('bookings'));
    }

    public function store(Request $request)
    {
        if (Booking::where('user_id', '=', $request->user_id)
            ->where('book_id', '=', $request->book_id)
            ->first()
        )
            return redirect()->back()->with('failure', 'You have already booked this book');
        else {
            Booking::updateOrCreate([
                'user_id' => $request->user_id,
                'book_id' => $request->book_id,
                'booked_on' => Carbon::today()->toDateString()
            ]);

            $book = Book::find($request->book_id);
            $book->available = $book->total - $book->issuebook->count() - $book->booking->count();
            $book->save();

            return redirect()->back()->with('success', 'Your booking is successfull');
        }
    }

    public function issue($id)
    {
        $booking = Booking::findOrFail($id);
        if (IssueBook::where('book_id', '=', $booking->book_id)
            ->where('user_id', '=', $booking->user_id)->first()
        )
            return redirect(route('bookings.index'))->with('failure', 'Book already issued');

        else {
            IssueBook::create([
                'book_id' => $booking->book_id,
                'user_id' => $booking->user_id,
                'issued_on' => Carbon::today()->toDateString()
            ]);
            $book = Book::find($booking->book_id);
            $book->available = $book->total - $book->issuebook->count() - $book->booking->count();
            $book->save();
            $booking->delete();
            return redirect(route('bookings.index'))->with('success', 'book issued successfully');
        }
    }

    public function destroy($id)
    {
        Booking::findOrFail($id)->delete();
        return redirect(route('bookings.index'))->with('success', 'book deleted successfully');

    }
}
