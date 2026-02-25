<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\GoogleAuthController;
use App\Http\Controllers\ActiveSchoolController;

Route::post('/v1/login', [App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'store']);