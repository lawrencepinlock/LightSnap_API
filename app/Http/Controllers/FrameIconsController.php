<?php

namespace App\Http\Controllers;
use App\Http\Resources\FrameIconsResource;
use App\Models\FrameIcons;
use Illuminate\Http\Request;

class FrameIconsController extends Controller
{

    public function index()
    {
        $frame_icons = FrameIcons::all();

        return FrameIconsResource::collection($frame_icons);
    }

    public function create(Request $request) 
    {
        $frame_icons = new FrameIcons();

        $frame_icons->mode= $request->input('mode');
        $frame_icons->event_name= $request->input('event_name');
        $frame_icons->icon_path= $request->input('icon_path');


        $frame_icons->save();
        return response()->json($frame_icons);
    }

    public function showbyid(Request $request, $id)
    {
        $frame_icons = FrameIcons::find($id);
        return response()->json($frame_icons);
        
    }

    public function updatebyid(Request $request, $id)
    {
        $frame_icons = FrameIcons::find($id);
        $frame_icons-> mode = $request->input('mode');
        $frame_icons-> event_name = $request->input('event_name');
        $frame_icons->event_name= $request->input('icon_path');
        $frame_icons->save();
        return response()->json($frame_icons);
    }

    public function deletebyid(Request $request, $id)
    {
        $frame_icons = FrameIcons::find($id);
        $frame_icons->delete();
        return response()->json($frame_icons);
        
    }
}