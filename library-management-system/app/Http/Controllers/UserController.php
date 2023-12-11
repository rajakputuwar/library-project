<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->search;
        $users = User::where(function ($query) use ($search) {
            $query->where('name', 'LIKE', "%$search%")
                ->orWhere('email', 'LIKE', "%$search%")
                ->orWhere('phone', 'LIKE', "%$search%")
                ->orWhere('college_id', 'LIKE', "%$search%")
                ->orWhere('isAdmin', 'LIKE', "%$search%");
        })->get();


        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.add_users');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        $input = $request->all();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $destination_path = public_path() . '/uploads/users/';
            $file->move($destination_path, $filename);
            $input['image'] = $filename;
        } else {
            $input['image'] = 'default_user.png';
        }
        User::create($input);

        return redirect(route('users.index'))->with('success', 'user stored successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('user.edit_users', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUserRequest $request, User $user)
    {
        $input = $request->all();
        if ($request->hasFile('image')) {
            if ($user->image != "default_user.png") {
                File::delete(public_path() . '/uploads/users/' . $user->image);
            }
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $destination_path = public_path() . '/uploads/users/';
            $file->move($destination_path, $filename);
            $input['image'] = $filename;
        }
        $user->update($input);
        return redirect(route('users.index'))->with('success', 'user updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect(route('users.index'))->with('success', 'User deleted successfully');
    }

    public function profile($id)
    {
        $user = User::find($id);
        return view('user.profileCard', compact('user'));
    }
}
