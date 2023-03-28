<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
class UserController extends Controller
{
    public function create(Request $request) 
    {
        $users = new Users();

        $users->name= $request->input('name');
        $users->email= $request->input('email');

        $users->save();
        return response()->json($users);
    }

    public function updatebyid(Request $request, $id)
    {
        $users = Users::find($id);
        $users-> name = $request->input('name');
        $users-> email = $request->input('email');

        $users->save();
        return response()->json($users);
    }

    public function deletebyid(Request $request, $id)
    {
        $users = Users::find($id);
        $users->delete();
        return response()->json($users);
        
    }
}
