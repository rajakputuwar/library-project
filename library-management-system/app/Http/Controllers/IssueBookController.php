<?php

namespace App\Http\Controllers;

use App\Models\IssueBook;
use Illuminate\Http\Request;

class IssueBookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $issues=IssueBook::get();
        return view('booksissue.index',compact('issues'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('booksissue.add_books');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Issue::create($request->validated());
        return redirect(route('booksissue.index'))->with('success','book stored successfully');
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
        return view('booksissue.edit_books',compact('issueBook'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, IssueBook $issueBook)
    {
        $issueBook->update($request->validated());
        return redirect(route('booksissue.index'))->with('success','book updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(IssueBook $issueBook)
    {
        $issueBook->delete();
        return redirect(route('bookissue.index'))->with('success','book deleted successfully');
    }
}
