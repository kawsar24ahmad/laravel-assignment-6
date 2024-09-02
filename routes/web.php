<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Route;

Route::get('/', [homeController::class, 'showData'])->name('home');

Route::get('/about', [AboutController::class, 'showAboutData'])->name('about');


Route::get('/resume', function () {
    $resumeData = Storage::json('resume.json');
    // dd($posts);
    return view('resume', compact('resumeData'));
})->name('resume');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/project',[ProjectController::class, 'showProject'])->name('project');
Route::get('/project-details{id}', [ProjectController::class, 'showDetails'])->name('project-details');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

