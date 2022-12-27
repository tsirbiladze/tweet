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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/tweets', [App\Http\Controllers\TweetController::class, 'index'])->name('tweets.index');
//    Route::get('/tweets/create', [App\Http\Controllers\TweetController::class, 'create'])->name('tweets.create');
    Route::post('/tweets', [App\Http\Controllers\TweetController::class, 'store'])->name('tweets.store');
//    Route::get('/tweets/{tweet}', [App\Http\Controllers\TweetController::class, 'show'])->name('tweets.show');
//    Route::get('/tweets/{tweet}/edit', [App\Http\Controllers\TweetController::class, 'edit'])->name('tweets.edit');
//    Route::put('/tweets/{tweet}', [App\Http\Controllers\TweetController::class, 'update'])->name('tweets.update');
//    Route::delete('/tweets/{tweet}', [App\Http\Controllers\TweetController::class, 'destroy'])->name('tweets.destroy');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
