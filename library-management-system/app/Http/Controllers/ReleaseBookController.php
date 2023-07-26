<?php

namespace App\Http\Controllers;

use App\Models\IssueBook;
use App\Models\ReleaseBook;
use Illuminate\Http\Request;

class ReleaseBookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $returnedBooks = ReleaseBook::get();
        return view('books_issue.returned',compact('returnedBooks'));
    }

    public function release($id)
    {
        $issueBook = IssueBook::find($id);
        $issueBook->replicate()->setTable('release_books')->save();
        $issueBook->delete();
        return redirect(route('issue-books.index'))->with('success','Book returned successfully');

    }
}
