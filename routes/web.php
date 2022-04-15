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
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/calendar', function () {
    return view('calendar');
});
Route::get('/cpg', function () {
    return view('cpg');
});
Route::get('/landing', function () {
    return view('landing');
});
Route::get('/events', function () {
    return view('events');
});
Route::get('/udemy', function () {
    return view('udemy');
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
Route::get('/folio', function () {
        return view('folio');
});
Route::get('/signin', function () {
    return view('signin');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/folio', function () {
    return view('folio');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
