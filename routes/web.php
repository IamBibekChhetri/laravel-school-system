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
Route::get('dashboard', function () {
    return view('first');

});
Route::get('addcourse', function () {
    return view('addcourse');

});
Route::get('viewcourse', function () {
    return view('viewcourse');

});
Route::get('addsection', function () {
    return view('addsection');

});
Route::get('addsemester', function () {
    return view('addsemester');

});
Route::get('addclass', function () {
    return view('addclass');

});