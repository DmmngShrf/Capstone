<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;


// not registered
Route::get('/homepage', function () {
    return view('homepage');
})->name('homepage');
// registered
Route::middleware('auth')->group(function () {
    Route::get('/homepage', 'HomeController@index')->name('homepage');

});


Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');

Route::get('/registration', [AuthManager::class, 'registration'])->name('registration');
Route::post('/registration', [AuthManager::class, 'registrationPost'])->name('registration.post');
Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');




