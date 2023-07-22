<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Display\DisplayController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
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

Route::get('/', [DisplayController::class, 'index'])->name('index');

Route::prefix('All')->name('All.')->group(function()
{
    Route::get('dashboard', [DisplayController::class, 'dashboard'])->name('Dashboard');

    Route::get('notifications', [DisplayController::class, 'notifications'])->name('notifications');

    Route::get('tables', [DisplayController::class, 'tables'])->name('tables');
    
    Route::get('user', [DisplayController::class, 'user'])->name('user');
});
// login and register 
Route::prefix('Vip')->name('Vip.')->group(function () {
    // GET route to display the registration form
    Route::get('/register', [RegisterController::class, 'signup'])->name('register');

    // POST route to handle the registration form submission
    Route::post('/register', [RegisterController::class, 'create'])->name('postRegister');

    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

    // POST route to handle the login form submission
    Route::post('/login', [LoginController::class, 'login'])->name('postLogin');
    
    
});

// Route::prefix('Vip')->name('Vip.')->group(function()
// {
    // Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    // Route::post('/register', 'Auth\RegisterController@register');
    
// });

// Route::middleware([])->group(function () {
//     // User Management
//     Route::get('/users', [UserController::class, 'index'])->name('users.index');
//     // Define other user management routes here
//     Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
//     Route::post('/users', [UserController::class, 'store'])->name('users.store');
//     Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
//     Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
//     Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
// });



// web.php


Route::middleware([])->group(function () {
    // User Management
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
});
