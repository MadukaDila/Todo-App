<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route to show the login form
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login.form');

// Route to handle the login attempt
Route::post('/login', [UserController::class, 'login'])->name('login');

// Route to log the user out
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

// Route to show the registration form
Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register.form');

// Route to handle the registration attempt
Route::post('/register', [UserController::class, 'register'])->name('register');

