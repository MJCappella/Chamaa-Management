<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;

class UserController extends Controller
{
    //
    public function createUser(Request $request)
    {
        $data = $request->all();
        $user = User::create($data);
        return response()->json([
            'message' => 'User created sucessfully',
            'user' => $user
        ], 200);
    }
    public function updateUser(Request $request, User $user)
    {
        $data = $request->all();
        $user->update($data);
        return response()->json([
            'message' => 'User information',
            'user' => $user
        ], 200);
    }
    public function deleteUser(Request $request, User $user)
    {
        $user->delete();
        return response()->json([
            'message' => 'User deleted succesfully',
            'user' => $user
        ], 200);
    }
    public function deleteUserById(Request $request, User $user)
    {
        $user->delete();
        return response()->json([
            'message' => 'User deleted succesfully
            ',
            'user' => $user
        ], 200);
    }
    public function getUserById(Request $request, User $user)
    {
        $user->find($user->id);
        return response()->json([
            'message' => 'User retrieved by Id',
            'user' => $user
        ], 200);
    }
    public function getUsers(Request $request, User $user)
    {
        $user = User::all();
        return response()->json([
            'message'=> 'List of all users',
            'All users'=> $user
            ],200);
    }

}
