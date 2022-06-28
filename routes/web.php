<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\PDFController;
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

//auth
Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/register',[AuthController::class,'sd'])->name('register');




Route::get('/get-summary-data',[PersonController::class,'getSummaryData'])->name('get.summary.data');
Route::post('/save-summary-data',[PersonController::class,'saveSummaryData'])->name('save.summary.data');

Route::post('/save-image',[PersonController::class,'saveImage'])->name('save.image');


Route::get('/get-personal-info',[PersonController::class,'getPersonalInfo'])->name('get.personal.info');
Route::post('/save-personal-info',[PersonController::class,'savePersonalInfo'])->name('save.personal.info');

Route::get('/get-about-me',[PersonController::class,'getAboutMe'])->name('get.about.me');
Route::post('/save-about-me',[PersonController::class,'saveAboutMe'])->name('save.about.me');

Route::get('/get-skills',[PersonController::class,'getSkills'])->name('get.skills');
Route::post('/save-skills',[PersonController::class,'saveSkills'])->name('save.skills');

Route::get('/get-jobs',[JobController::class,'getJobs'])->name('get.jobs');
Route::post('/save-jobs',[JobController::class,'saveJobs'])->name('save.jobs');
Route::post('/update-job-item',[JobController::class,'UpdateJobItem'])->name('update.job');
Route::post('/delete-job-item',[JobController::class,'DeleteJobItem'])->name('delete.job');

Route::get('/get-educations',[EducationController::class,'getEducations'])->name('get.educations');
Route::post('/save-education',[EducationController::class,'saveEducation'])->name('save.education');
Route::post('/update-education-item',[EducationController::class,'UpdateEducationItem'])->name('update.education');
Route::post('/delete-education-item',[EducationController::class,'DeleteEducationItem'])->name('delete.education');

Route::get('/get-languages',[LanguageController::class,'getLanguages'])->name('get.languages');
Route::post('/add-language',[LanguageController::class,'addLanguage'])->name('add.language');
Route::post('/update-language-item',[LanguageController::class,'updateLanguage'])->name('update.language.item');
Route::post('/delete-language-item',[LanguageController::class,'deleteLanguage'])->name('delete.language.item');


//resume html
Route::get('/resume',[PDFController::class,'preview'])->name('resume.preview');


