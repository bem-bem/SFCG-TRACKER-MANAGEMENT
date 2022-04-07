<?php

use App\Http\Controllers\CreateController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\TrackController;
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
Route::post('survey/{id}', SurveyController::class)->name('add_survey');

// track
Route::get('track/table', [TrackController::class, 'trackTable'])->name('track.table');
Route::get('track/view/{id}', [TrackController::class, 'trackView'])->name('track.view');

// pdf converter
Route::get('pdf/{id}', [PdfController::class, 'pdf'])->name('pdf');


Route::get('/', function () {
    return view('auth.login');
});

Route::resource('people', PersonController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
