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

Route::get('/home', function () {
    return view('home');
});
Route::get('/calendar', function () {
    return view('calendar');
});
Route::get('/landing', function () {
    return view('landing');
});
Route::get('/events', function () {
    return view('events');
});
Route::get('/events', function () {
    return view('events');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/chat', function () {
    return view('chat');
});
Route::get('/forgot', function () {
    return view('forgot');
});
Route::get('/signin', function () {
    return view('signin');
});
Route::get('/signup', function () {
    return view('signup');
});

Route::get('/folio', function () {
    return view('folio');
})->middleware(['auth'])->name('folio');

require __DIR__.'/auth.php';
