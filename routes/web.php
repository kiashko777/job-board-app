<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Home page
Route::get('/', function () {
    return view('home');

});

// List all jobs with pagination
Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->paginate(10);
    return view('jobs.index', [
        'jobs' => $jobs]);
});


// Show job creation form
Route::get('/jobs/create', function () {
    return view('jobs.create');
});


// Show single job details
Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);
    {
        return view('jobs.show', [
            'job' => $job
        ]);
    }
});


// Store a new job listing
Route::post('/jobs', function () {
    request()->validate([
    'title' => ['required', 'min:3'],
    'salary' => ['required'],
]);

    Job::create([
    'title' => request('title'),
    'salary' => request('salary'),
    'employer_id' => 1,
]);

return redirect('/jobs');

});


// Show job edit form
Route::get('/jobs/{id}/edit', function ($id) {
    $job = Job::find($id);
    {
        return view('jobs.edit', [
            'job' => $job
        ]);
    }
});


// Update an existing job listing
Route::patch('/jobs/{id}', function ($id) {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required'],
    ]);

    $job = Job::findOrFail($id);

    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
    ]);

    return redirect('/jobs/'. $job->id);
});


// Delete a job listing
Route::delete('/jobs/{id}', function ($id) {
 $job = Job::findOrFail($id);
 $job->delete();
 return redirect('/jobs');
});


// Contact page
Route::get('/contact', function () {
    return view('contact');
});
