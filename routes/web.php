<?php

use App\Http\Controllers\HomeController;
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