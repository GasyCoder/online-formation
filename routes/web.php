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

// Redirect to login page
Route::get('/', function () {
    return redirect('/login');
});

Route::view('home', 'home')->middleware(['auth', 'verified'])
    ->name('home');

Route::view('account', 'account')->middleware(['auth', 'verified'])
    ->name('account');

Route::view('detail_cours', 'detail_cours')->middleware(['auth', 'verified'])
    ->name('detail_cours');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
