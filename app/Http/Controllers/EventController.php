<?php

namespace App\Http\Controllers;

use App\Event;
use App\Mail\EventCreated;
use Illuminate\Support\Facades\Mail;

class EventController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $events = Event::all();
        return view("events.home",compact('events'));
    }

    public function create()
    {
        return view("events.create");
    }

    public function store()
    {
        // Equivalent to one below
//        $data = request()->validate([
//            "name" => "required | min:3 ",
//            "description" => "required | min:10",
//            "date" => "required "
//        ]);
        $data = $this->validateData();

        #Forma step by step...
//        $user = auth()->user();
//        $event = new Event();
//        $event->name = $request["name"];
//        $event->description = $request["description"];
//        $event->date = $request["date"];
//        $event->user_id = $user->id;
//        $event->save();


        # forma shpejte edhe clean
        $event = auth()->user()->events()->create($data);
        $user = auth()->user();
        Mail::to($user->email)->send(new EventCreated($user));
        return redirect('/events/');
    }


    public function show(Event $event)
    {
        return view('events.show',compact('event'));
    }


    public function edit(Event $event)
    {
        return view("events.edit",compact("event"));
    }


    public function update(Event $event)
    {
        $data = $this->validateData();
        $event->update($data);
        return redirect("/events");
    }


    public function destroy(Event $event)
    {
        $event->delete();
        return redirect("/events");
    }

    public function validateData(){
        return request()->validate([
            "name" => "required | min:3 ",
            "description" => "required | min:10",
            "date" => "required "
        ]);
    }
}


