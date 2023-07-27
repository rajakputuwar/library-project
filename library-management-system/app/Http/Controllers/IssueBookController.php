<?php

namespace App\Http\Controllers;

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
        $books = Book::get();
        $users = User::get();

        return view('books_issue.add_issue_books', compact('books', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        IssueBook::create($request->all() + [
            'book_id' => $request->book_id,
            'user_id' => $request->user_id,
            'issued_on' => $request->issued_on,
        ]);
        return redirect(route('issue-books.index'))->with('success', 'book stored successfully');
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
        $books = Book::get();
        $users = User::get();
        return view('books_issue.edit_issue_books', compact('issueBook', 'books', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, IssueBook $issueBook)
    {
        $issueBook->update($request->validated());
        return redirect(route('issue-books.index'))->with('success', 'book updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(IssueBook $issueBook)
    {
        $issueBook->delete();
        return redirect(route('issue-books.index'))->with('success', 'book deleted successfully');
    }
}
