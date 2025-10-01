<?php

use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\GuardianController;
use App\Http\Controllers\ClassroomController;


Route::get('/profil', [ProfilController::class, 'index']);
Route::get('/', [HomeController::class, 'index']);

Route::get('/kontak', [ContactController::class, 'index']);

Route::get('/home', [HomeController::class, 'index']);

Route::get('/student', [StudentController::class, 'index']);

Route::get('/guardian', [GuardianController::class, 'index']);

Route::get('/classroom', [ClassroomController::class, 'index']);

