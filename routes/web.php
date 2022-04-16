<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\PersonController;
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

Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/get-summary-data',[PersonController::class,'getSummaryData'])->name('get.summary.data');
Route::post('/save-summary-data',[PersonController::class,'saveSummaryData'])->name('save.summary.data');

Route::get('/get-personal-info',[PersonController::class,'getPersonalInfo'])->name('get.personal.info');
Route::post('/save-personal-info',[PersonController::class,'savePersonalInfo'])->name('save.personal.info');

Route::get('/get-about-me',[PersonController::class,'getAboutMe'])->name('get.about.me');
Route::post('/save-about-me',[PersonController::class,'saveAboutMe'])->name('save.about.me');

Route::get('/get-skills',[PersonController::class,'getSkills'])->name('get.skills');
Route::post('/save-skills',[PersonController::class,'saveSkills'])->name('save.skills');

Route::get('/get-jobs',[JobController::class,'getJobs'])->name('get.jobs');
Route::post('/save-jobs',[JobController::class,'saveJobs'])->name('save.jobs');
