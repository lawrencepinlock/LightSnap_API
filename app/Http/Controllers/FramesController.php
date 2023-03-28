<?php

namespace App\Http\Controllers;

use App\Http\Resources\FramesResource;
use App\Models\Frames;
use Illuminate\Http\Request;

class FramesController extends Controller
{

    public function index()
    {
        $frames = Frames::all();

        return FramesResource::collection($frames);
    }
    public function create(Request $request) 
    {
        $frames = new Frames();

        $frames->mode= $request->input('mode');
        $frames->event_name= $request->input('event_name');
        $frames->frame_path= $request->input('frame_path');


        $frames->save();
        return response()->json($frames);
    }


    public function showbyid(Request $request, $id)
    {
        $frames = Frames::find($id);
        return response()->json($frames);
        
    }

    public function updatebyid(Request $request, $id)
    {
        $frames = Frames::find($id);
        $frames-> event_name = $request->input('event_name');
        $frames-> mode = $request->input('mode');
        $frames->event_name= $request->input('frame_path');

        $frames->save();
        return response()->json($frames);
    }

    public function deletebyid(Request $request, $id)
    {
        $frames = Frames::find($id);
        $frames->delete();
        return response()->json($frames);
        
    }
}

