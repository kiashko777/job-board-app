<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;


// Home page
Route::view('/', 'home');

// Contact page
Route::view('/contact', 'contact');

// Resource route for all jobs CRUD operations
Route::resource('jobs', JobController::class);



