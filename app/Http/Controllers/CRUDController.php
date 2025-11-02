<?php

namespace App\Http\Controllers;

use App\Models\crud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class CRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          // Validate input before saving
        $validated = $request->validate([
            'fullname' => 'string|max:255',
            'username' => 'string|max:255|unique:cruds',
            'email' => 'email|max:255|unique:cruds',
            'password' => 'min:6',
            'role' => 'required|in:user,staff,admin',
        ]);

        // Create the record properly
        crud::create([
            'fullname' => $validated['fullname'],
            'username' => $validated['username'],
            'email' => $validated['email'],
            'password' => Hash::make($request->password), // hash password for security using bycrpt if bet ko? eme
            'role' => $validated['role']
        ]);

        // Check if registration is from admin panel
        if ($request->has('from_admin') && $request->from_admin == '1') {
            return redirect()->route('register')->with('success', 'User registered successfully!');
        }

        return redirect()->route('auth.login');
    }

    public function register()
    {
        $crud = crud::orderBy('id', 'desc')->paginate(10);
        return view('register', compact('crud'));
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
