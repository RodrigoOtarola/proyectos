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

//imprimir query

DB::listen(function ($query){
    var_dump($query->sql);;
});

Route::view('/','home')->name('home');

Route::view('/about','about')->name('about');

Route::resource('projects','\App\Http\Controllers\ProjectController');

Route::get('categorias/{category}',[\App\Http\Controllers\CategoryController::class,'show'])->name('categories.show');

Route::view('/contact','contact')->name('contact');

Route::post('contact',[\App\Http\Controllers\MessageController::class,'store']);

//Para ocultar view register.
Auth::routes(['register'=>false]);

Route::get('/logout',[\App\Http\Controllers\Auth\LoginController::class,'logout'])->name('logout');
