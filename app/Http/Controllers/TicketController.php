<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Ticket;
use App\Models\TicketMessage;
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

    public function showTicket(){

        $ticket = Ticket::where('user_id' , auth()->id())->latest()->get();

    }

    public function sendMessage(Request $request, $id){
    $request->validate([
        'message' => 'required|string|max:1000',
    ]);

    TicketMessage::create([
        'ticket_id' => $id,
        'user_id'   => auth()->id(),
        'message'   => $request->message,
    ]);

    $ticket = Ticket::findOrFail($id);
    $ticket->update([
        'status' => auth()->user()->role === 'admin' ? 'open' : 'pending'
    ]);

    return redirect()->back()->with('success', 'Message Sent');
    }

    public function updateStatus(Request $request, $id){
        $request->validate([
            'status' => 'required|in:pending,open,resolved,closed',
        ]);

        Ticket::findOrFail($id)->update(['status' => $request->status]);
        return redirect()->back()->with('success', 'Status Updated');
    }

    
    
}
