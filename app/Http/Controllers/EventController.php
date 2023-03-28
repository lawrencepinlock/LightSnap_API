<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function create(Request $request) 
    {
        $events = new Event();

        $events->event_name= $request->input('event_name');
        $events->mode= $request->input('mode');

        $events->save();
        return response()->json($events);
    }

    public function updatebyid(Request $request, $id)
    {
        $events = Event::find($id);
        $events-> event_name = $request->input('event_name');
        $events-> mode = $request->input('mode');

        $events->save();
        return response()->json($events);
    }

    public function deletebyid(Request $request, $id)
    {
        $events = Event::find($id);
        $events->delete();
        return response()->json($events);
        
    }
}
