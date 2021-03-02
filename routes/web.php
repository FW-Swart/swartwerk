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
})->name('welcome');

// Main Views
Route::get('/enter', function () {
    return view('main/enter');
})->name('enter');

Route::get('/home', function () {
    return view('main/home');
})->name('home');

Route::get('/gallery', function () {
    return view('main/gallery');
})->name('gallery');

Route::get('/projects', function () {
    return view('main/projects');
})->name('projects');

/*
|--------------------------------------------------------------------------
|ADMIN GROUP
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
