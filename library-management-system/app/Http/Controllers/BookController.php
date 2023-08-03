<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
        public function index(Request $request)
        {
            $search = $request['search'] ?? "";
            if ($search != "")
                $books = Book::where("name", "LIKE", "%$search%")->get();
            else
                $books = Book::get();

            return view('books.index', compact('books','search'));
        }
        // $books=Book::get();
        // return view('books.index',compact('books'));

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get();
        return view('books.add_books',compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        $category = Category::find($request->category_id);
        $category->books()->create($request->validated() + ['available' => $request->total]);

        return redirect(route('books.index'))->with('success','book stored successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        $categories = Category::get();
        return view('books.edit_books',compact('book','categories'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreBookRequest $request, Book $book)
    {
        $book->category_id = $request->category_id;

        $book->update($request->validated() + ['available' => $request->total - $book->issuebook->count()]);
        return redirect(route('books.index'))->with('success','book updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect(route('books.index'))->with('success','book deleted successfully');
    }
}
