<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingsController;

Route::get('/', [AccueilController::class, 'index']);
Route::get('/home', [AccueilController::class, 'home']);

Route::get('/profile', [ProfileController::class, 'show']);
Route::get('/settings', [SettingsController::class, 'index']);
