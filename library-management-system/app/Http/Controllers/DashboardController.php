<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Booking;
use App\Models\IssueBook;
use App\Models\ReleaseBook;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $books = Book::get();
        $users = User::get();
        $bookings = Booking::get();
        $booksIssued = IssueBook::get();
        $booksReturned = ReleaseBook::get();

        return view('dashboard',compact('books','users','bookings','booksIssued','booksReturned'));
    }
}
