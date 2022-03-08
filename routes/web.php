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
    return view('top');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/kid', 'KidController');

Route::post('/kid/diary/store','DiaryController@store')->name('diary.store');

Route::get('/mykid', 'HomeController@mykid')->name('home.mykid');

Route::middleware(['can:admin'])->group(function() {
      Route::get('/profile/index', 'ProfileController@index')->name('profile.index');
    Route::delete('/profile/delete/{user}', 'ProfileController@delete')->name('profile.delete');
});