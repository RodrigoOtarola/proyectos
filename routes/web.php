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

Route::view('/','home')->name('home');

Route::view('/about','about')->name('about');

Route::resource('projects','\App\Http\Controllers\ProjectController');

Route::view('/contact','contact')->name('contact');

Route::post('contact',[\App\Http\Controllers\MessageController::class,'store']);
