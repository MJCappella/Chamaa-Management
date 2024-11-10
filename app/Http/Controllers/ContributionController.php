<?php

namespace App\Http\Controllers;

use App\Models\Contribution;
use Illuminate\Http\Request;

class ContributionController extends Controller
{
    //
    public function makeContribution(Request $request)
    {
        // Validate the request
        $request->validate([
            'Amount' => 'required'
        ]);

        $contribution = new Contribution();
        $contribution->Amount = $request->Amount;
        $contribution->Type = $request->Type;
        $contribution->user_id = $request->user_id;
        $contribution->save();

        return response()->json(data: [
            'message' => 'contribution created successfully',
            'contribution' => $contribution
        ]);
    }
    public function updateContribution(Request $request, Contribution $contribution)
    {
        $request->validate([
            'amount' => 'required'
        ]);
        $contribution->Amount = $request->Amount;
        $contribution->save();
        return response()->json(data: [
            'message' => 'Contribution updated succesfully',
            'contribution' => $contribution
        ]);
    }
    public function getContributions(Request $request)
    {
        $contribution = Contribution::all();
        return response()->json([
            'message' => 'All contribution',
            'contribution' => $contribution
        ]);
    }


}
