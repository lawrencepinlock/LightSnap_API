<?php

namespace App\Http\Controllers;
use App\Http\Resources\EventImagesResource;
use App\Models\EventImage;
use Illuminate\Http\Request;
use App\Http\Requests\EventImagesStoreRequest;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Response as HttpResponse;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class EventImageController extends Controller
{

    public function index()
    {
        $event_images = EventImage::all();

        return EventImagesResource::collection($event_images);
    }

    public function create(Request $request) 
    {
        $event_images = new EventImage();

        $event_images->image_path= $request->input('image_path');
        $event_images->event_id= $request->input('event_id');

        $event_images->save();
        return response()->json($event_images);
    }


    public function stored(Request $request) // papakita lahat sa event gallery

    {
        $event_images = EventImage:: all();
        return response()->json($event_images);
    }


    public function store(EventImagesStoreRequest $request) // pagstore ng image sa local dir and db

    {
      try {
        $imageName = Str:: random(32).".".$request->image_path->getClientOriginalExtension();

        //Create Post
        EventImage::create ([
            'image_path'=>$imageName,
            'event_id'=>$request->event_id
        ]);

        //Save images in storage folder
        Storage::disk('public') ->put($imageName, file_get_contents($request->image_path));

        return response() ->json([
            'message'=>"Post successfully created."
        ],200);

      } catch (\Exception $e){
        //Return Json Response
        return response () ->json([
            'message' => $e->getMessage()
        ], 500);
      }
    }




    public function show(Request $request)

    {
        $event_images = EventImage:: all();
        return response()->json($event_images);
    }
    public function updatebyid(Request $request, $id)
    {
        $event_images = EventImage::find($id);
        $event_images-> image_path = $request->input('image_path');
        $event_images->event_id= $request->input('event_id');
        
        $event_images->save();
        return response()->json($event_images);
    }

    public function deletebyid(Request $request, $id)
    {
        $event_images = EventImage::find($id);
        $event_images->delete();
        return response()->json($event_images);
        
    }
}
