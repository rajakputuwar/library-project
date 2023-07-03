<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\IssueBook;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $books = Book::get();
        $users = User::get();
        $booksIssued = IssueBook::get();

        return view('dashboard',compact('books','users','booksIssued'));
    }
}
