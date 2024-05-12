<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        // Get all users
        $users = User::all();

        // Return user index view with users
        return view('users.index', ['users' => $users]);
    }

    public function create(Request $request)
    {
        // Validate the request...

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('/users');
    }

    public function update(Request $request, User $user)
    {
        // Validate the request...

        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        $user->save();

        return redirect('/users');
    }

    public function delete(User $user)
    {
        $user->delete();

        return redirect('/users');
    }

    public function login(Request $request)
    {
        // Validate the request...

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication passed...
            return redirect()->intended('/dashboard');
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
}
