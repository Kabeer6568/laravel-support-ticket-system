<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;



Route::get('/', function () {
    return view('layouts.index');
})->name('account.index');

Route::get('/account' , [AuthController::class , 'create'])->name('account.create');
Route::post('/register' , [AuthController::class , 'register'])->name('account.register');

Route::post('/login' , [AuthController::class , 'login'])->name('account.login');
