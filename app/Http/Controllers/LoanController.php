<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loan;

class LoanController extends Controller
{
    public function GetLoan(Request $request){
        $data = $request->all();
       $loan = Loan::get($data);
       return response()->json([
           'message'=>'View Eligable Loan',
           'loan' => $loan
       ], 200);

    }

    public function ApplyLoan(Request $request){
        $data = $request->all();
        try{
            $loan = Loan::create($data);
            return response()->json([
                'message'=>'Loan applied sucessfully',
                'loan' => $loan
            ], 200);
    }
    catch(\Exception $e){
        return response()->json([
            'message'=>'Failed to apply loan',
            'error' => $e->getMessage()
        ], 400);
    }
}
}