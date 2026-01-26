<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Ticket;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function raiseTicket(Request $request){

        
        $userId = auth()->id();
        

        $data = $request->validate([

        'subject' => 'required|string|max:255',
        'description' => 'required|string|max:255',

        ]);

        $ticket = Ticket::create([
        
        'user_id' => $userId,
        'subject' => $data['subject'],
        'description' => $data['description'],
        'status' => 'pending',
        'priority' => 'normal',

        ]);

        
        return redirect()->route('account.user')->with('success' , 'Ticket Created');

    }

    
}
