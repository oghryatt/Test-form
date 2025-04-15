<?php

use App\Http\Controllers\RegisterController;
use App\Http\Requests\RegisterRequest;
use App\Http\Controllers\LoginController;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\AdminController;
use App\Http\Requests\AdminRequest;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ConfirmController;
use App\Http\Requests\ConfirmRequest;



Route::get('/register', [RegisterController::class, 'Register']);
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/login', [LoginController::class, 'create']);
Route::post('/login', [LoginController::class, 'store']);
Route::get('/Admin', [AdminController::class, 'index']);
Route::get('/', [IndexController::class, 'index'])
;
Route::post('/', [IndexController::class, 'store']);
Route::get('/Confirm', [ConfirmController::class, 'create']);
Route::post('/contacts/confirm', [ConfirmController::class, 'confirm']);
Route::get('/contacts/thanks', [ConfirmController::class, 'thanks']);

