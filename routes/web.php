<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Display\DisplayController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\TraineeController;
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

Route::get('/', [DisplayController::class, 'welcome'])->name('welcome');

Route::prefix('All')->name('All.')->group(function () 
{
    // Route index by role
    Route::group(['prefix' => 'InRole'], function () {

        Route::get('indexA/', [DisplayController::class, 'indexAdmin'])->middleware('checkRole:admin')->name('index.admin');

        Route::get('indexTing/', [DisplayController::class, 'indexTraining'])->name('index.training');

        Route::get('indexTer/', [DisplayController::class, 'indexTrainer'])->name('index.trainer');
    });

    Route::get('dashboard/', [DisplayController::class, 'dashboard'])->middleware('checkRole:admin')->name('Dashboard');

    Route::get('notifications/', [DisplayController::class, 'notifications'])->name('notifications');

    Route::get('tables/', [DisplayController::class, 'tables'])->name('tables');

    Route::get('user/', [DisplayController::class, 'user'])->name('user');
});

// login and register 
Route::prefix('Auth')->name('Auth.')->group(function () {
    // GET route to display the registration form
    Route::get('register/', [RegisterController::class, 'getRegister'])->name('getRegister');

    // POST route to handle the registration form submission
    Route::post('register/', [RegisterController::class, 'postRegister'])->name('postRegister');

    Route::get('login/', [LoginController::class, 'getLogin'])->name('getLogin');

    // POST route to handle the login form submission
    Route::post('login/', [LoginController::class, 'postLogin'])->name('postLogin');
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

Route::middleware([])->group(function () {
    // User Management
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
});

Route::get('/trainees', [TraineeController::class, 'index'])->name('users.indexTstaff');
Route::get('/trainees/create', [TraineeController::class, 'create'])->name('trainees.create');
Route::post('/trainees', [TraineeController::class, 'store'])->name('trainees.store');
Route::get('/trainees/{trainee}/edit', [TraineeController::class, 'edit'])->name('trainees.edit');
Route::put('/trainees/{trainee}', [TraineeController::class, 'update'])->name('trainees.update');
Route::delete('/trainees/{trainee}', [TraineeController::class, 'destroy'])->name('trainees.destroy');