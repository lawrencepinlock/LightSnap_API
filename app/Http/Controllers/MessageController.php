<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
class MessageController extends Controller
{
    public function create(Request $request) 
    {        
        $messages = new Message();

        $messages->message = $request->input('message');

        $messages->save();
        return response()->json($messages);
    }

    public function show(Request $request)

    {
        $messages = Message:: all();
        return response()->json($messages);
    }
    
    public function updatebyid(Request $request, $id)
    {
        $messages = Message::find($id);
        $messages-> message = $request->input('message');

        $messages->save();
        return response()->json($messages);
    }

    public function deletebyid(Request $request, $id)
    {
        $messages = Message::find($id);
        $messages->delete();
        return response()->json($messages);
        
    }
}
