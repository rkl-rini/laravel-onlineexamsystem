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

Route::get('/mainpage', function () {
    return view('navigation');
});
Route::get('/mainpage', function () {
    return view('account');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/logout', function () {
    return view('logout');
});
Route::get('/sign', function () {
    return view('sign');
});
Route::get('/update', function () {
    return view('update');
});