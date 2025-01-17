<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('User/landing-page');
});
Route::get('/login', function () {
    return view('User/login');
});
Route::get('/register', function () {
    return view('User/register');
});
Route::get('/dashboard-user', function () {
    return view('User/dashboard');
});
Route::get('/data-user', function () {
    return view('User/form-data-diri');
});
