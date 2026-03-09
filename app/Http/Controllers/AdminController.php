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
    $ticketsQty = Ticket::count();
    $closedTicketsQty = Ticket::whereIn('status' , ['closed' , 'resolved'])->count();
    $activeTicketsQty = Ticket::whereIn('status' , ['open' , 'pending'])->count();

    return view('layouts.admin.index' , compact('users' , 'tickets' , 'ticketsQty' , 'closedTicketsQty' , 'activeTicketsQty'));

    }
}
