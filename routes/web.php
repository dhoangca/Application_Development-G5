<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Display\DisplayController;
use App\Http\Controllers\Manages\UserController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Manages\TraineeController;
use App\Http\Controllers\Manages\CoursesController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Display\ProfileMGMTController;
use App\Http\Controllers\Manages\CourseCategoryController;
use App\Http\Controllers\Manages\TopicController;
use App\Http\Controllers\Manages\TrainerController;
use App\Http\Controllers\Manages\TopicTrainerController;
use App\Http\Controllers\Manages\TraineesCoursesController;

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

// login and register 
Route::prefix('Auth')->name('Auth.')->group(function () {

    Route::get('register/', [RegisterController::class, 'getRegister'])->name('getRegister');

    Route::post('register/', [RegisterController::class, 'postRegister'])->name('postRegister');

    Route::get('login/', [LoginController::class, 'getLogin'])->name('getLogin');

    Route::post('login/', [LoginController::class, 'postLogin'])->name('postLogin');

    Route::post('logout/', [LogoutController::class, 'logout'])->name('logout');
});

//bảo mật check status
Route::middleware(['auth', 'checkUserStatus'])->group(function () {

    Route::prefix('All')->name('All.')->group(function () {
        // Route index by role
        Route::group(['prefix' => 'InRole'], function () {

            Route::get('indexA/', [DisplayController::class, 'indexAdmin'])->middleware('checkRole:admin')->name('index.admin');

            Route::get('indexTing/', [DisplayController::class, 'indexTraining'])->middleware('checkRole:training')->name('index.training');

            Route::get('indexTer/', [DisplayController::class, 'indexTrainer'])->middleware('checkRole:trainer')->name('index.trainer');
        });

        Route::get('dashboard/', [DisplayController::class, 'dashboard'])->middleware('checkRole:admin')->name('Dashboard');

        Route::get('notifications/', [DisplayController::class, 'notifications'])->name('notifications');

        Route::get('user/', [DisplayController::class, 'user'])->name('user');
    });

    // route of role Trainer
    Route::prefix('Trainer')->name('Trainer.')->group(function () {

        Route::get('/ViewProfile', [ProfileMGMTController::class, 'ViewProfile'])->middleware('checkRole:trainer')->name('ViewProfile');

        Route::post('/ViewProfile', [ProfileMGMTController::class, 'updateProfile'])->middleware('checkRole:trainer')->name('updateProfile');
    });

    // route of role Training with function assign trainer to a topic
    Route::prefix('Assign')->name('Assign.')->group(function () {

        Route::get('/assign-trainer-to-topic', [TopicTrainerController::class, 'assignTrainerForm'])->middleware('checkRole:admin,training')->name('assignTrainerForm');

        Route::post('/assign-trainer-to-topic', [TopicTrainerController::class, 'assignTrainerToTopic'])->middleware('checkRole:admin,training')->name('assignTrainerToTopic');
    });

    // route of role Training with function assign trainer to a topic
    Route::prefix('AssignC')->name('AssignC.')->group(function () {

        Route::get('/assign_trainee_to_courses', [TraineesCoursesController::class, 'assignTraineeForm'])->middleware('checkRole:admin,training')->name('assignTraineeForm');

        Route::post('/assign_trainee_to_courses', [TraineesCoursesController::class, 'assignTraineeToCourse'])->middleware('checkRole:admin,training')->name('assignTraineeToCourse');
    });

    Route::prefix('Users')->name('Users.')->group(function () {
        // User Management
        Route::get('/users', [UserController::class, 'index'])->middleware('checkRole:admin')->name('users.index');

        Route::get('/users/create', [UserController::class, 'create'])->middleware('checkRole:admin')->name('users.create');

        Route::post('/users', [UserController::class, 'postCreate'])->middleware('checkRole:admin')->name('users.postCreate');

        // Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');

        // Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');

        Route::delete('/users/{user}', [UserController::class, 'delete'])->middleware('checkRole:admin')->name('users.delete');

        Route::put('/users/{user}/toggle-status', [UserController::class, 'toggleStatus'])->middleware('checkRole:admin')->name('users.toggleStatus');
    });

    Route::prefix('managetrainee')->name('managetrainee.')->group(function () {
        // Route for displaying the form to create a new trainee account
        Route::get('/trainees/create', [TraineeController::class, 'create'])->middleware('checkRole:admin,training')->name('trainees.create');

        // Route for storing the newly created trainee account data in the database
        Route::post('/trainees', [TraineeController::class, 'store'])->middleware('checkRole:admin,training')->name('trainees.store');

        // Route for displaying the form to edit an existing trainee account
        Route::get('/trainees/{trainee}/edit', [TraineeController::class, 'edit'])->middleware('checkRole:admin,training')->name('trainees.edit');

        // Route for updating the trainee account data in the database
        Route::put('/trainees/{traineeId}', [TraineeController::class, 'update'])->middleware('checkRole:admin,training')->name('trainees.update');

        // Route for deleting a trainee account from the database
        Route::delete('/trainees/{trainee}', [TraineeController::class, 'delete'])->middleware('checkRole:admin,training')->name('trainees.delete');

        // Route for displaying a list of all trainee accounts
        Route::get('/trainees', [TraineeController::class, 'index'])->middleware('checkRole:admin,training')->name('trainees.index');
    });

    Route::prefix('manageCourse')->name('manageCourse.')->group(function () {
        // Route for displaying the form to create a new trainee account
        Route::get('/courses/create', [CoursesController::class, 'create'])->middleware('checkRole:admin,training')->name('courses.create');

        // Route for storing the newly created trainee account data in the database
        Route::post('/courses', [CoursesController::class, 'store'])->middleware('checkRole:admin,training')->name('courses.store');

        // Route for displaying the form to edit an existing trainee account
        Route::get('/courses/{course}/edit', [CoursesController::class, 'edit'])->middleware('checkRole:admin,training')->name('courses.edit');

        // Route for updating the trainee account data in the database
        Route::put('/courses/{courseId}', [CoursesController::class, 'update'])->middleware('checkRole:admin,training')->name('courses.update');

        // Route for deleting a trainee account from the database
        Route::delete('/courses/{course}', [CoursesController::class, 'delete'])->middleware('checkRole:admin,training')->name('courses.delete');

        // Route for displaying a list of all trainee accounts
        Route::get('/courses', [CoursesController::class, 'index'])->middleware('checkRole:admin,training')->name('courses.index');
    });


    Route::prefix('MNGCourseCategories')->name('MNGCourseCategories.')->group(function () {
        //course_categories
        Route::get('/course-categories', [CourseCategoryController::class, 'index'])->middleware('checkRole:admin,training')->name('course-categories.index');

        Route::get('/course-categories/create', [CourseCategoryController::class, 'create'])->middleware('checkRole:admin,training')->name('course-categories.create');

        Route::post('/course-categories', [CourseCategoryController::class, 'store'])->middleware('checkRole:admin,training')->name('course-categories.store');

        Route::get('/course-categories/{category}/edit', [CourseCategoryController::class, 'edit'])->middleware('checkRole:admin,training')->name('course-categories.edit');

        Route::put('/course-categories/{categoryId}', [CourseCategoryController::class, 'update'])->middleware('checkRole:admin,training')->name('course-categories.update');

        Route::delete('/course-categories/{category}', [CourseCategoryController::class, 'delete'])->middleware('checkRole:admin,training')->name('course-categories.delete');
    });

    Route::prefix('MngTopic')->name('MngTopic.')->group(function () {
        //topic

        Route::get('/topics', [TopicController::class, 'index'])->middleware('checkRole:admin,training')->name('topics.index');

        Route::get('/topics/create', [TopicController::class, 'create'])->middleware('checkRole:admin,training')->name('topics.create');

        Route::post('/topics', [TopicController::class, 'store'])->middleware('checkRole:admin,training')->name('topics.store');

        Route::get('/topics/{topic}/edit', [TopicController::class, 'edit'])->middleware('checkRole:admin,training')->name('topics.edit');

        Route::put('/topics/{topicId}', [TopicController::class, 'update'])->middleware('checkRole:admin,training')->name('topics.update');

        Route::delete('/topics/{topic}', [TopicController::class, 'destroy'])->middleware('checkRole:admin,training')->name('topics.destroy');
    });
});
