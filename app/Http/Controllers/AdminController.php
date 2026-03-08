<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Ticket;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showUsers(){

    $users = User::all();
    $tickets = Ticket::with('user' , 'messages.user')->latest()->get();
    // $messages = Ticket::with('message.user' , 'user')->findOrFail($id);

    return view('layouts.admin.index' , compact('users' , 'tickets'));

    }
}
