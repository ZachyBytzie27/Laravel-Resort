<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Crud;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        // ✅ Validate input
        $request->validate([
            'login' => 'required|string',
            'password' => 'required|string',
        ]);

        // ✅ Find user by email or username
        $user = Crud::where('email', $request->login)
                    ->orWhere('username', $request->login)
                    ->first();

        if (!$user) {
            return back()->withErrors(['login' => 'Account not found.']);
        }

        // ✅ Verify password
        if (!Hash::check($request->password, $user->password)) {
            return back()->withErrors(['password' => 'Incorrect password.']);
        }

        // ✅ Store session data
        Session::put('loggedUser', $user->id);
        Session::put('role', strtolower($user->role)); // make sure role = 'admin' or 'user'

        // ✅ Redirect based on role
        $role = strtolower($user->role);

        if ($role === 'admin') {
            return redirect()->route('dashboard')->with('success', 'Welcome back, Admin!');
        } elseif ($role === 'user') {
            return redirect()->route('booking')->with('success', 'Welcome to your account!');
        } else {
            // fallback if role is unknown
            return redirect()->route('auth.login')->withErrors(['login' => 'Invalid role detected.']);
        }
    }
}
