<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Display\DisplayController;

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
