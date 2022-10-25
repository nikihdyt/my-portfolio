<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

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
    return view('about-me');
});

Route::resource('projects',
'App\Http\Controllers\ProjectController');

Route::resource('about-me',
'App\Http\Controllers\AboutMeController');

Route::resource('contact-me',
'App\Http\Controllers\ContactMeController');

Route::get('projects/hapus/{id}', [App\Http\Controllers\ProjectController::class, 'hapus']);

Auth::routes([
    'reset' => false,
   ]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
