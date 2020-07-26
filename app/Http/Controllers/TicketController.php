<?php

namespace App\Http\Controllers;

use App\Event;
use App\Http\Controllers\Controller;
use App\Ticket;
use App\User;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    //
    public function listTicket()
    {
        $ticket = Ticket::with("User")->paginate(20);
        return view("ticket.list", [
            "ticket" => $ticket
        ]);
    }

    public function newTicket()
    {
        $users =User::all();
        $events =Event::all();
        return view("ticket.new",[
            "users"=>$users,
            "events"=>$events
        ]);
    }

    public function saveTicket(Request $request)
    {
        $request->validate([
            "ticket_name" => "required",
            "ticket_price"=>"required",
            "user_id"=>"required",
            "event_id"=>"required",
            "ticket_code"=>"required"
        ]);
        try {
            Ticket::create([
                "ticket_name" => $request->get("ticket_name"),
                "ticket_price" => $request->get("ticket_price"),
                "ticket_code" => $request->get("ticket_code"),
                "user_id"=>$request->get("user_id"),
                "event_id"=>$request->get("event_id"),
            ]);
        } catch (\Exception $exception) {
            dd($exception->getMessage());
        }
        return redirect()->to("/admin/list-ticket");
    }

    public function editTicket($id)
    {
        $user = User::all();
        $ticket = Ticket::findOrFail($id);
        return view("ticket.edit",
            ["ticket" => $ticket,
                "user"=>$user
            ]);
    }

    public function updateTicket($id, Request $request)
    {
        $ticket = Ticket::findOrFail($id);
        $request->validate([
            "ticket_name" => "required|min:6|unique:tickets,ticket_name,{$id}",
            "ticket_type"=>"required",
            "ticket_price"=>"required",
            "ticket_code"=>"required",
            "user_id"=>"required",
        ]);
        // die("loi");
        //      dd($request->all());
        try {
            $ticket->update([
                "ticket_name" => $request->get("ticket_name"),
                "ticket_type" => $request->get("ticket_type"),
                "ticket_price" => $request->get("ticket_price"),
                "ticket_code" => $request->get("ticket_code"),
                "user_id"=>$request->get("user_id"),
            ]);
        } catch (\Exception $exception) {
            dd($exception->getMessage());
            return redirect()->back();
        }
        return redirect()->to("/admin/list-ticket");
    }

    public function deleteTicket($id)
    {
        $ticket = Ticket::findOrFail($id);
        try {
            $ticket->delete();
        } catch (\Exception $exception) {
            return redirect()->back();
        }
        return redirect()->to("/admin/list-ticket");
    }
}
