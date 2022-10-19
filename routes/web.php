<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\TeacherController;
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

Route::get('/', function () {
    return view('welcome');

});

Route::get('dashboard', function () {
    return view('dashboard');

});

Route::get('header', function () {
    return view('header');

});

Route::get('footer', function () {
    return view('footer');

});

Route::get('aside', function () {
    return view('aside');

});


Route::get('addstudent', function () {
    return view('form.addstudent');

});
Route::get('addteacher', function () {
    return view('form.addteacher');

});

Route::resource('student', StudentController::class);
Route::resource('course', CourseController::class);
Route::resource('section', SectionController::class);
Route::resource('semester', SemesterController::class);
Route::resource('classes', ClassesController::class);
Route::resource('subject', SubjectController::class);
Route::resource('book', BookController::class);
Route::resource('teacher', TeacherController::class);