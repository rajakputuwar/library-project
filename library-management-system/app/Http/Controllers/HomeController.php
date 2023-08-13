<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
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
    public function index()
    {
        return view('userDashboard');
    }

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
