<?php

namespace App\Http\Controllers;
use App\Models\Installment;

use Illuminate\Http\Request;

class InstallmentController extends Controller
{
    //make installment
    public function makeInstallment(Request $request)
    {
        // Validate the request
        $request->validate([
            'Amount' => 'required',
            'loan_id' => 'required'
        ]);

        $installment = new Installment();
        $installment->Amount = $request->Amount;
        $installment->loan_id = $request->loan_id;
        $installment->save();

        return response()->json([
            'message' => 'Installment created successfully',
            'installment' => $installment
        ]);
    }

    //get all installments
    public function getAllInstallments()
    {
        $installments = Installment::all();
        return response()->json([
            'message' => 'All installments',
            'installments' => $installments
        ]);
    }

    //get installments by user id in the loans table
    public function getInstallmentsByUserId($user_id)
    {
        $installments = Installment::whereHas('loan', function($query) use ($user_id){
            $query->where('user_id', $user_id);
        })->get();
        return response()->json([
            'message' => 'Installments by user id',
            'installments' => $installments
        ]);
    }

    //get installments by loan id
    public function getInstallmentsByLoanId($loan_id)
    {
        $installments = Installment::where('loan_id', $loan_id)->get();
        return response()->json([
            'message' => 'Installments by loan id',
            'installments' => $installments
        ]);
    }
}
