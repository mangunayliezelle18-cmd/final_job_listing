<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

// Landing Page
Route::get('/', function () {
    return view('welcome');
});

// Dalawang ruta lang ang kailangan natin
Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');      // Listahan
Route::get('/jobs/{job}', [JobController::class, 'show'])->name('jobs.show');  // Dynamic New Page