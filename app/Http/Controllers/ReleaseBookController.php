<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\IssueBook;
use App\Models\ReleaseBook;
use Illuminate\Http\Request;

class ReleaseBookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->search;
        $returnedBooks = ReleaseBook::where(function ($query) use ($search) {
            $query->where('issued_on', 'LIKE', "%$search%")
                ->orWhere('returned_on', 'LIKE', "%$search%");
        })
            ->orWhereHas('book', function ($query) use ($search) {
                $query->where('name', 'like', "%$search%");
            })
            ->orWhereHas('user', function ($query) use ($search) {
                $query->where('name', 'like', "%$search%");
            })->get();

        return view('books_issue.returned', compact('returnedBooks'));
    }

    public function release($id)
    {
        $issueBook = IssueBook::find($id);

        ReleaseBook::create([
            'book_id' => $issueBook->book_id,
            'user_id' => $issueBook->user_id,
            'issued_on' => $issueBook->issued_on,
            'fine' => $issueBook->fine,
            'returned_on' => now(),
            'released_by' => auth()->user()->name,
        ]);
        $book = Book::find($issueBook->book_id);
        $book->available += 1;
        $book->save();
        $issueBook->delete();

        return redirect(route('issue-books.index'))->with('success', 'issued book returned successfully');
    }
}
