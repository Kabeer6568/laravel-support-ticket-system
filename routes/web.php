<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Auth;


// Auth Route
Route::get('/account' , [AuthController::class , 'create'])->name('account.create');
Route::post('/register' , [AuthController::class , 'register'])->name('account.register');
Route::post('/login' , [AuthController::class , 'login'])->name('account.login');
Route::get('/not-allowed' , function(){

    return view('layouts.not-allowed');

})->name('page.notAllowed');
Route::get('/logout' , [AuthController::class , 'logout'])->name('account.logout');

// User Route
Route::get('/', [AuthController::class , 'userDash'])->middleware(['role:user'])->name('account.user');
Route::post('/', [TicketController::class , 'raiseTicket'])->name('ticket.user');


//Admin Route

Route::get('/admin', [AuthController::class , 'adminDash'])->middleware(['role:admin'])->name('account.admin');
