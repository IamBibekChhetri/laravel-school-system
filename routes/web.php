<?php

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

Route::get('/', function () {
    return view('welcome');

});
Route::get('headfoot', function () {
    return view('headfoot');

});
Route::get('addcourse', function () {
    return view('form.addcourse');

});
Route::get('viewcourse', function () {
    return view('table.viewcourse');

});
Route::get('addsection', function () {
    return view('form.addsection');

});
Route::get('addsemester', function () {
    return view('form.addsemester');

});
Route::get('addclass', function () {
    return view('form.addclass');

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