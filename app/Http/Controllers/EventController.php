<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Event;
use App\User;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function listEvent(){
        $event = Event::with("Banner")->with("User")->paginate(10);
        $user =User::all();
        $banner =Banner::all();
        return view("event.list",[
            "event" => $event,
            "user"=>$user,
            "banner"=>$banner,
        ]);
    }
    public function editEvent($id){
        $user =User::all();
        $banner=Banner::all();
        $event =Event::with("User")->with("Banner")->paginate(10);
        $event = Event::findOrFail($id);
        return view("event.edit",[
            "event" => $event,
            "user"=>$user,
            "banner"=>$banner
        ]);
    }
    public function newEvent(){
        $user = User::all();
        $banner=Banner::all();
        return view("event.new",[
            "user"=>$user,
            "banner"=>$banner
        ]);
    }

    public function saveEvent(Request $request){
        $request->validate([
//            "event_name" => "required|string|min:6",
//            "event_date_start" => "required|string",
//            "event_date_end" => "required|string",
//            "event_people_count" => "required",
//            "event_address" => "required|string",
//            "event_content" => "required|string|min:12",
//            "event_desc" =>"required|string|min:12",
//            "user_id" => "required",
//            "banner_id" => "required",
        ]);
        try{
            Event::create([
                "event_name" => $request->get("event_name"),
                "event_date_start" => $request->get("event_date_start"),
                "event_date_end" => $request->get("event_date_end"),
                "event_people_count" => $request->get("event_people_count"),
                "event_address" => $request->get("event_address"),
                "event_content" => $request->get("event_content"),
                "event_desc" => $request->get("event_desc"),
                "user_id" => $request->get("user_id"),
                "banner_id" => $request->get("banner_id"),
            ]);
        }catch (\Exception $exception){
            return $exception->getMessage();
        }
        return redirect()->to("/list-event");
    }
    public function updateEvent(Request $request, $id){
        $event = Event::findOrFail($id);
        $request->validate([
//            "event_name" => "required|string|min:6",
//            "event_date_start" => "required",
//            "event_date_end" => "required",
//            "event_people_count" => "required",
//            "event_address" => "required",
//            "event_content" => "required|string|min:12",
//            "event_desc" =>"required|string|min:12",
//            "user_id" => "required",
//            "banner_id" => "required",
        ]);
        // die("loi");
        //      dd($request->all());
        try {

            $event->update([
                "event_name" => $request->get("event_name"),
                "event_date_start" => $request->get("event_date_start"),
                "event_date_end" => $request->get("event_date_end"),
                "event_people_count" => $request->get("event_people_count"),
                "event_address" => $request->get("event_address"),
                "event_content" => $request->get("event_content"),
                "event_desc" => $request->get("event_desc"),
                "user_id" => $request->get("user_id"),
                "banner_id" => $request->get("banner_id"),
            ]);
        } catch (\Exception $exception) {
            dd($exception->getMessage());
        }
        return redirect()->to("/list-event");
    }
    public function deleteEvent($id){
        $event = Event::findOrFail($id);
        try {
            $event->delete();
        } catch (\Exception $exception) {
            return redirect()->back();
        }
        return redirect()->to("/list-event");
    }
}
