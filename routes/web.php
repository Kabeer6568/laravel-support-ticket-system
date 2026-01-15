<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;


Route::get('/', [AuthController::class , 'dash'])->middleware('auth')->name('account.index');

Route::get('/account' , [AuthController::class , 'create'])->name('account.create');
Route::post('/register' , [AuthController::class , 'register'])->name('account.register');

Route::post('/login' , [AuthController::class , 'login'])->name('account.login');

Route::get('/not-allowed' , function(){

    return view('layouts.not-allowed');

})->name('page.notAllowed');