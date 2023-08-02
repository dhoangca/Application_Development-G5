<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Display\DisplayController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\TraineeController;
use App\Http\Controllers\CoursesController;

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

Route::prefix('All')->name('All.')->group(function () {
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

Route::middleware([])->group(function () {
    // User Management
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
});

Route::prefix('managetrainee')->name('managetrainee.')->group(function () {
    // Route for displaying the form to create a new trainee account
    Route::get('/trainees/create', [TraineeController::class, 'create'])->name('trainees.create');

    // Route for storing the newly created trainee account data in the database
    Route::post('/trainees', [TraineeController::class, 'store'])->name('trainees.store');

    // Route for displaying the form to edit an existing trainee account
    Route::get('/trainees/{trainee}/edit', [TraineeController::class, 'edit'])->name('trainees.edit');

    // Route for updating the trainee account data in the database
    Route::put('/trainees/{traineeId}', [TraineeController::class, 'update'])->name('trainees.update');

    // Route for deleting a trainee account from the database
    Route::delete('/trainees/{trainee}', [TraineeController::class, 'delete'])->name('trainees.delete');

    // Route for displaying a list of all trainee accounts
    Route::get('/trainees', [TraineeController::class, 'index'])->name('trainees.index');
});

Route::prefix('manageCourse')->name('manageCourse.')->group(function () {
    // Route for displaying the form to create a new trainee account
    Route::get('/courses/create', [CoursesController::class, 'create'])->name('courses.create');

    // Route for storing the newly created trainee account data in the database
    Route::post('/courses', [CoursesController::class, 'store'])->name('courses.store');

    // Route for displaying the form to edit an existing trainee account
    Route::get('/courses/{course}/edit', [CoursesController::class, 'edit'])->name('courses.edit');

    // Route for updating the trainee account data in the database
    Route::put('/courses/{courseId}', [CoursesController::class, 'update'])->name('courses.update');

    // Route for deleting a trainee account from the database
    Route::delete('/courses/{course}', [CoursesController::class, 'delete'])->name('courses.delete');

    // Route for displaying a list of all trainee accounts
    Route::get('/courses', [CoursesController::class, 'index'])->name('courses.index');
});