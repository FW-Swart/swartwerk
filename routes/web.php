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

/*
|--------------------------------------------------------------------------
|PUBLIC GROUP
|--------------------------------------------------------------------------
*/

// Test Views
Route::get('/', function () {
    return view('welcome');
});

// Main Views
Route::get('/enter', function () {
    return view('main/enter');
});

Route::get('/home', function () {
    return view('main/home');
});

/*
|--------------------------------------------------------------------------
|ADMIN GROUP
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
