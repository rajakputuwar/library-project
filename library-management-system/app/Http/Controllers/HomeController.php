<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Booking;
use App\Models\Category;
use App\Models\IssueBook;
use App\Models\ReleaseBook;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    

    public function store()
    {
        $categories = Category::get();
        $books = Book::get();
        return view('store', compact('books','categories'));
    }

    public function show($id)
    {
        $categories = Category::find($id);

        return view('storeShow',compact('categories'));
    }

    public function error()
    {
        return view('error');
    }
}
