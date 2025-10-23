<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;


// Home page
Route::view('/', 'home');

// Contact page
Route::view('/contact', 'contact');

// Resource route for all jobs CRUD operations
Route::resource('jobs', JobController::class);

//Auth
Route::get('/register', [RegisteredUserController::class, 'create']);

Route::post('/register', [RegisteredUserController::class, 'store']);


Route::get('/login', [SessionController::class, 'create']);

Route::post('/login', [SessionController::class, 'store']);



