<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
  
    public function GetUsers(Request $request){
        $data = $request->all();
       $user = User::get($data);
       return response()->json([
           'message'=>'View Eligable User',
           'user' => $user
       ], 200);

    }

    public function CreateUser(Request $request){
        $data = $request->all();
        
            $user = User::create($data);
            return response()->json([
                'message'=>'User created sucessfully',
                'user' => $user
            ], 200);
    
 
    }
}