<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RecipeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', function () {return view('welcome');})->name('home');

Route::get('/catalog', [RecipeController::class, 'index'])
    ->name('catalog');

Route::get('/meal/{meal}', function () {return view('oneMeal');})->name('oneMeal');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
