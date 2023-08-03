<?php

namespace App\Http\Controllers\Manages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // Fetch all users from the database
        $users = User::all();

        $pagination = User::paginate(7);
        // Pass the users to the view
        return view('users.lists', compact('users', 'pagination'));
    }

    public function toggleStatus(User $user)
    {
        // Toggle the user's status between 'active' and 'blocked'
        $user->update([
            'status' => $user->status === 'active' ? 'blocked' : 'active',
        ]);

        // Set a flash message to inform the user about the status update
        $statusMessage = $user->status === 'active' ? 'User has been unblocked.' : 'User has been blocked.';
        session()->flash('status', $statusMessage);

        return redirect()->back();
    }

    public function create()
    {
        return view('users.create');
    }

    public function postCreate(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required',
            'email' => 'required|email|unique:users',
            'role' => 'required|in:admin,user,training,trainer',
        ]);

        // Create a new user
        $user = new User;
        $user->username = $validatedData['username'];
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']);
        $user->role = $validatedData['role'];
        $user->save();

        return redirect()->route('users.index')->with('success', 'User created successfully');
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'username' => 'required|unique:users,username,' . $user->id . ',id',
            'email' => 'required|email|unique:users,email,' . $user->id . ',id',
            'role' => 'required|in:admin,user,training,trainer',
        ]);

        // Update the user
        $user->username = $validatedData['username'];
        $user->email = $validatedData['email'];
        $user->role = $validatedData['role'];
        $user->save();

        return redirect()->route('users.index')->with('success', 'User updated successfully');
    }

    public function delete(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')->with('success', 'User deleted successfully');
    }

    public function dashboard(Request $request)
    {
        // Retrieve the username from the query parameters
        $username = $request->query('username');

        return view('dashboard', compact('username'));
    }
}
