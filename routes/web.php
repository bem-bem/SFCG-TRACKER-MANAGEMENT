<?php

use App\Http\Controllers\CreateController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SurveyController;
use Illuminate\Support\Facades\Route;

// registration form
Route::get('create-student', [CreateController::class, 'student'])->name('create_student');
Route::get('create-staff', [CreateController::class, 'staff'])->name('create_staff');
Route::get('create-visitor', [CreateController::class, 'visitor'])->name('create_visitor');

// searching
Route::get('search/id-number', [SearchController::class, 'personsTable'])->name('search.id_number');
Route::get('search/category', [SearchController::class, 'category'])->name('search.category');
Route::get('search/municipality', [SearchController::class, 'municipality'])->name('search.municipality');

// add survey
// Route::post('survey/{id}', SurveyController::class)->name('add_survey');

Route::get('/', function () {
    return view('welcome');
});

Route::resource('people', PersonController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
