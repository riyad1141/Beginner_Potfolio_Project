<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});


// page routes

Route::get('/',[\App\Http\Controllers\HomeController::class,'page']);
Route::get('/contracts',[\App\Http\Controllers\ContractController::class,'page']);
Route::get('/projects',[\App\Http\Controllers\ProjectController::class,'page']);
Route::get('/resume',[\App\Http\Controllers\ResumeController::class,'page']);



// Ajax call Routes

Route::get('/heroData',[\App\Http\Controllers\HomeController::class,'heroDate']);
Route::get('/aboutData',[\App\Http\Controllers\HomeController::class,'aboutData']);
Route::get('/socialData',[\App\Http\Controllers\HomeController::class,'socialData']);
Route::get('/projectData',[\App\Http\Controllers\ProjectController::class,'projectData']);
Route::get('/resumeLink',[\App\Http\Controllers\ResumeController::class,'resumeLink']);
Route::get('/experienceData',[\App\Http\Controllers\ResumeController::class,'experienceData']);
Route::get('/educationData',[\App\Http\Controllers\ResumeController::class,'educationData']);
Route::get('/skillData',[\App\Http\Controllers\ResumeController::class,'skillData']);
Route::get('/languageData',[\App\Http\Controllers\ResumeController::class,'languageData']);
Route::post('/contractRequest',[\App\Http\Controllers\ContractController::class,'contractRequest']);
