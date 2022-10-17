<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\ClassesController;
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
Route::get('headfoot', function () {
    return view('headfoot');

});
Route::get('addsubject', function () {
    return view('form.addsubject');

});
Route::get('addbook', function () {
    return view('form.addbook');

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