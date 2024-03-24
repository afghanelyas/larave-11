<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs',
        ['jobs' => Job::all()]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = Job::find($id);

    return view('job', ['job' => $jobs]);
});

Route::get('/contact', function () {
    return view('contact');
});
