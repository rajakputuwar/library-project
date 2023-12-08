<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIssueBookRequest;
use App\Models\Book;
use App\Models\IssueBook;
use App\Models\User;
use Illuminate\Http\Request;

class IssueBookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->search;
        $issueBooks = IssueBook::where(function ($query) use ($search) {
            $query->where('issued_on', 'LIKE', "%$search%");
        })
            ->orWhereHas('book', function ($query) use ($search) {
                $query->where('name', 'like', "%$search%");
            })
            ->orWhereHas('user', function ($query) use ($search) {
                $query->where('name', 'like', "%$search%");
            })->get();

        return view('books_issue.index', compact('issueBooks', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $books = Book::where('available', '>', 0)->get();
        $users = User::get();

        return view('books_issue.add_issue_books', compact('books', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreIssueBookRequest $request)
    {

        if (IssueBook::where('book_id', '=', $request->book_id)
            ->where('user_id', '=', $request->user_id)->first()
        )
            return redirect(route('issue-books.index'))->with('failure', 'Book already issued');

        else {
            IssueBook::create([
                'book_id' => $request->book_id,
                'user_id' => $request->user_id,
                'issued_on' => $request->issued_on,
            ]);
            $book = Book::find($request->book_id);
            $book->available = $book->total - $book->issuebook->count() - $book->booking->count();
            $book->save();
            return redirect(route('issue-books.index'))->with('success', 'book issued successfully');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(IssueBook $issueBook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(IssueBook $issueBook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, IssueBook $issueBook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(IssueBook $issueBook)
    {
        $book = Book::find($issueBook->book_id);
        $book->available += 1;
        $book->save();
        $issueBook->delete();
        return redirect(route('issue-books.index'))->with('success', 'issued book deleted successfully');
    }
}
