<?php

namespace App\Http\Controllers;
use App\Models\Expense;

use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function ListExpenses()
    {
        // Fetch all expenses from the database
        $expenses = Expense::all();
        return response()->json([
            'message' => 'List of expenses',
            'expenses' => $expenses
        ], 200);
    }

    public function CreateExpense(Request $request)
    {
        // Validate the request
        $request->validate([
            'Amount' => 'required',
            'ExpenseName' => 'required',
            'Description' => 'required',
            'chamaa_id' => 'required'
        ]);

        // Create a new expense
        $expense = new Expense();
        $expense->Amount = $request->Amount;
        $expense->ExpenseName = $request->ExpenseName;
        $expense->Description = $request->Description;
        $expense->chamaa_id = $request->chamaa_id;
        $expense->save();

        return response()->json([
            'message' => 'Expense created successfully',
            'expense' => $expense
        ]);
    }

    public function ViewExpense($id)
    {
        // Find the expense
        $expense = Expense::find($id);
        if(!$expense){
            return response()->json([
                'message' => 'Expense not found'
            ], 404);
        }

        return response()->json([
            'message' => 'Expense details',
            'expense' => $expense
        ], 200);
    }

    public function UpdateExpense(Request $request, $id)
    {
        // Find the expense
        $expense = Expense::find($id);
        if(!$expense){
            return response()->json([
                'message' => 'Expense not found'
            ], 404);
        }

        // Validate the request
        $request->validate([
            'Amount' => 'required',
            'ExpenseName' => 'required',
            'Description' => 'required',
            'chamaa_id' => 'required'
        ]);

        // Update the expense
        $expense->Amount = $request->Amount;
        $expense->ExpenseName = $request->ExpenseName;
        $expense->Description = $request->Description;
        $expense->chamaa_id = $request->chamaa_id;
        $expense->save();

        return response()->json([
            'message' => 'Expense updated successfully',
            'expense' => $expense
        ]);
    }

    public function DeleteExpense($id)
    {
        // Find the expense
        $expense = Expense::find($id);
        if(!$expense){
            return response()->json([
                'message' => 'Expense not found'
            ], 404);
        }

        // Delete the expense
        $expense->delete();

        return response()->json([
            'message' => 'Expense deleted successfully'
        ]);
    }
}
