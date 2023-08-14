<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Booking;
use App\Models\IssueBook;
use App\Models\ReleaseBook;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function adminIndex()
    {
        $books = Book::get();
        $users = User::get();
        $bookings = Booking::get();
        $booksIssued = IssueBook::get();
        $booksReturned = ReleaseBook::get();

        return view('dashboard', compact('books', 'users', 'bookings', 'booksIssued', 'booksReturned'));
    }

    public function userIndex()
    {
        $user = auth()->user()->id;
        $booksIssued = IssueBook::where('user_id', '=', $user)->get();
        $bookings = Booking::where('user_id', '=', $user)->get();
        $booksReturned = ReleaseBook::where('user_id', '=', $user)->get();
        return view('userDashboard', compact('booksIssued', 'bookings', 'booksReturned'));
    }

    public function check()
    {
        if (Auth::check()) {
            if (auth()->user()->isAdmin == 1)
                return redirect(route('dashboard'));
            else
                return redirect(route('userDashboard'));
        } else {
            return redirect(route('login'));
        }
    }
}
