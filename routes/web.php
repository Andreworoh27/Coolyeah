<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseSessionController;
use App\Http\Controllers\UserCourseController;
use App\Http\Controllers\ViewController;
use App\Models\Course;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ViewController::class, 'initialPage']);

Route::get('/login', [ViewController::class, 'showLoginPage']);
Route::get('/register', [ViewController::class, 'showRegisterPage']);
Route::post('/login', [ViewController::class, 'showLoginPage']);
Route::post('/register', [ViewController::class, 'showRegisterPage']);

Route::resource('course', CourseController::class);
Route::resource('coursesession', CourseSessionController::class);
Route::resource('usercourse', UserCourseController::class);
