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
Route::resource('course', CourseController::class);
Route::resource('coursesession', CourseSessionController::class);
Route::resource('usercourse', UserCourseController::class);
