<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\GreetController;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;

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
    'reset' => true,
   ]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/send-email', [App\Http\Controllers\SendEmailController::class, 'index'])->name('kirim-email');
Route::post('/post-email', [App\Http\Controllers\SendEmailController::class, 'store'])->name('post-email');

Route::resource('gallery', 'App\Http\Controllers\GalleryController');
Route::get('galleryAPI', [App\Http\Controllers\GreetController::class, 'gallery'])->name('gallery');

Route::get('/greet', [GreetController::class, 'greet'])->name('greeting');