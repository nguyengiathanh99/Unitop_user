<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\UserCourseController;
use App\Http\Controllers\UserLessonController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\HeartController;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('courses', CourseController::class);
Route::resource('courses.lessons', LessonController::class);
Route::middleware('auth')->group(function () {
    Route::resource('user_courses', UserCourseController::class);
    Route::resource('user_lessons', UserLessonController::class);
    Route::resource('course_reviews', ReviewController::class);
    Route::resource('user-profile', ProfileController::class)->except([
        'show','destroy','index','store'
    ]);
    Route::post('favorite/{course}/add', [FavoriteController::class, 'add'])->name('course.favorite');
});
//Login with Google
Route::get('/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('/google/callback', [GoogleController::class, 'handleGoogleCallBack']);
Route::get('heart/index', [HeartController::class, 'index'])->name('heart.index');

