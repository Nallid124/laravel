<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticatedController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [AuthenticatedController::class, 'formRegister'])->name('register');
Route::post('/register', [AuthenticatedController::class, 'register']);

Route::get('/login', [AuthenticatedController::class, 'formLogin'])->name('login');
Route::post('/login', [AuthenticatedController::class, 'login']);
Route::post('/logout', [AuthenticatedController::class, 'logout'])->name('logout');

Route::get('/page', [AuthenticatedController::class, 'page'])->name('page');

Route::get('/', function () {
    return view('welcome');
})->name('welcome');