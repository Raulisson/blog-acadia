<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::get('/', [SiteController::class, 'homeview']);
Route::get('/creators', [SiteController::class, 'creatorsview']);
Route::get('/contact', [SiteController::class, 'contactview']);
Route::get('/majornotices', [SiteController::class, 'majornoticesview']);
Route::get('/profile', [SiteController::class, 'profileview']);


