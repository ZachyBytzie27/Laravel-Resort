<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CRUDController;
use App\Http\Controllers\Addcottagecontroller;

Route::post('/add-cottage', [Addcottagecontroller::class, 'store'])->name('addcottage');
Route::get('/', [Addcottagecontroller::class, 'index'])->name('store');
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// 🏠 Default route → Login page
Route::get('/', function () {
    return view('logincontent');
})->name('outside');

// ==========================
// 🔐 AUTH ROUTES
// ==========================

// Login page (GET)
Route::get('/login', function () {
    return view('auth.login');
})->name('auth.login');

// Authenticate user (POST)
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');

// Logout (GET)
Route::get('/logout', function () {
    Session::flush();
    return redirect()->route('auth.login');
})->name('logout');

// ==========================
// 🧾 STATIC PAGES
// ==========================
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');

// ==========================
// 🧑‍💼 ADMIN ROUTES
// ==========================
Route::middleware(['web'])->group(function () {
    Route::get('/dashboard', function () {
        // check if logged in and role = admin
        if (Session::get('role') !== 'admin') {
            return redirect()->route('auth.login')->with('error', 'Access denied.');
        }
        return view('dashboard');
    })->name('dashboard');

    Route::get('/cottages', [Addcottagecontroller::class, 'index'])->name('cottages.index');
    Route::view('/cottages/create', 'cottages.create')->name('cottages.create');

    Route::view('/guests', 'guests.index')->name('guests.index');
    Route::view('/guests/create', 'guests.create')->name('guests.create');

    Route::view('/reservations', 'reservations.index')->name('reservations.index');
    Route::view('/reservations/create', 'reservations.create')->name('reservations.create');

    Route::view('/reports', 'reports.index')->name('reports.index');
    Route::get('/register', [CRUDController::class, 'register'])->name('register');
});

// ==========================
// 👤 USER ROUTES
// ==========================
Route::get('/booking', function () {
    if (Session::get('role') !== 'user') {
        return redirect()->route('auth.login')->with('error', 'Access denied.');
    }
    return view('booking');
})->name('booking');

// ==========================
// 📝 USER REGISTRATION
// ==========================
Route::get('/signup', function () {
    return view('signup');
})->name('signup');

Route::post('/signup', [CRUDController::class, 'store'])->name('create');

// ==========================
// 🧪 MOCK LOGIN (for testing roles manually)
// ==========================
Route::post('/mock-login', function (Request $request) {
    Session::put('role', $request->role);
    if ($request->role === 'admin') {
        return redirect()->route('dashboard');
    } else {
        return redirect()->route('booking');
    }
});

route::get('/userdetails', [CRUDController::class,'register']);
