<?php

namespace App\Http\Controllers;
use App\Models\Chamaa;

use Illuminate\Http\Request;

class ChamaaController extends Controller
{
    //
    public function CreateChamaa(Request $request)
    {
        $data = $request->all();
        $chamaa = Chamaa::create($data);
        return response()->json([
            'message'=>'Chamaa created sucessfully',
            'chamaa' => $chamaa
        ], 200);
    }

    public function ListChamaa(Request $request)
    {
        $data = Chamaa::all();
        return response()->json([
            'message'=> 'List of all chamaas',
            'All chamaa'=> $data
            ],200);

    }

    public function DeleteChamaa(Request $request)
    {
        $chamaa = Chamaa::findOrFail($request->id);
        $chamaa->delete();
        return response()->json($chamaa);
    }

}
