<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Ticket;
use App\User;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    //
    public function listTicket()
    {
        //lay tat ca
        $ticket = Ticket::with("User")->paginate(20);
//        dd($program);
        return view("ticket.list", [
            "ticket" => $ticket]);
        //
    }

    public function newTicket()
    {
        $user =User::all();
//        dd($user);

        return view("ticket.new",[
            "user"=>$user
        ]);
    }

    public function saveTicket(Request $request)
    {
        //validate du lieu
        $request->validate([
            "ticket_name" => "required|string|min:6|unique:tickets",
            "ticket_type"=>"required",
            "ticket_price"=>"required",
            "ticket_code"=>"required",
            "user_id"=>"required"
        ]);
        try {
            Ticket::create([
                "ticket_name" => $request->get("ticket_name"),
                "ticket_type" => $request->get("ticket_type"),
                "ticket_price" => $request->get("ticket_price"),
                "ticket_code" => $request->get("ticket_code"),
                "user_id"=>$request->get("user_id"),
            ]);

        } catch (\Exception $exception) {
            return redirect()->back();
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
