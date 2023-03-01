<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class TicketsController extends Controller
{
    public function home(){
        return view('tickets/home');
    }

    public function index()
    {
        $tickets = auth()->user()->tickets;
        return view('tickets/my_tickets', ['tickets' => $tickets]);

//        if (Auth::user()->admin){
//            $userID = Auth::user()->id;
//            $tickerts = User::find($userID)->tickets;
//        }else{
//            $tickets = Ticket::all();
//        }
//        return view('tickets/my_tickets', ['tickets' => $tickets]);
    }

    public function create()
    {
        return view('tickets/new_ticket');
    }

    public function postCreate(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'message' => 'required',
        ]);

        $ticket = new Ticket();
        $ticket->title = $request->input('title');
        $ticket->category = $request->input('category');
        $ticket->priority = $request->input('priority');
        $ticket->message = $request->input('message');
        $ticket->user_id = auth()->user()->id;


        $ticket->save();

        return redirect('/new_ticket')
            ->with('success', 'Su incidencia ID '.$ticket->id.' se ha creado correctamente');
    }

    public function show($ticket_id)
    {
        $ticket= Ticket::findOrFail($ticket_id);
        $dateDiff= Carbon::now()->diffForHumans($ticket->created_at);
        return view('tickets/tickets', ['tickets' => $ticket, 'dateDiff'=>$dateDiff]);
    }

    public function showAll(){
        $tickets = Ticket::all();
        return view('tickets/admin_tickets', ['tickets' => $tickets]);
    }

    public function close($ticket_id)
    {
        $ticket = Ticket::findOrFail($ticket_id);
        $ticket->status = false;
        $ticket->update();
        return redirect()->action([TicketsController::class, 'showAll']);
    }
}
