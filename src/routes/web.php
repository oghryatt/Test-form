<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;



Route::get('/', [RegisterController::class, 'Register']);
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/login', [LoginController::class, 'create']);
Route::post('/login', [LoginController::class, 'store']);
Route::get('/Admin', [AdminController::class, 'index']);
Route::get('/Admin/export', [AdminController::class, 'export']);
Route::delete('/Admin/{id}', [AdminController::class, 'destroy']);
Route::get('/index', [ContactController::class, 'index'])->name('contact.index');
Route::get('/', [IndexController::class, 'index'])->name('index');
Route::post('/contacts/confirm', [ConfirmController::class, 'confirm'])->name('contacts.confirm');
Route::post('/contacts/store', [ConfirmController::class, 'store'])->name('contacts.store');
Route::get('/contacts/thanks', [ConfirmController::class, 'thanks'])->name('contacts.thanks');

