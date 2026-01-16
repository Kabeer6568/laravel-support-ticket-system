<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;


Route::get('/', [AuthController::class , 'userDash'])->middleware(['auth' , 'role:user'])->name('account.user');
Route::get('/admin', [AuthController::class , 'adminDash'])->middleware(['auth', 'role:admin'])->name('account.admin');

Route::get('/account' , [AuthController::class , 'create'])->name('account.create');
Route::post('/register' , [AuthController::class , 'register'])->name('account.register');

Route::post('/login' , [AuthController::class , 'login'])->name('account.login');

Route::get('/not-allowed' , function(){

    return view('layouts.not-allowed');

})->name('page.notAllowed');