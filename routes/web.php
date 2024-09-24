<?php

use App\Http\Controllers\PerabotanController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('perabotan', PerabotanController::class);

});
Route::get('/dashboard', [PerabotanController::class, 'dashboard'])->name('dashboard');


