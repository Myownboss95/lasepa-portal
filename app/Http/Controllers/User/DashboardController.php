<?php

namespace App\Http\Controllers\User;

use Carbon\Carbon;
use App\Models\Result;
use App\Models\Sample;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = $request->user();
        $userTransactions = $user->load('transactions.sample');
        $userSamples = $user->load('samples.transaction', 'sample.results');
        // dd(auth()->user()->transactions);
        return view('user.dashboard', [
            'user' => $user->load('transactions.sample','samples.transaction'),
            'samples' => $userSamples->samples,
            'transactions' => $userTransactions->transactions
        ]);
    }

    public function report($id)
    {
        $sample = Sample::find($id);

        return view('user.report', [
            'report' => $sample->load('results')
        ]);
    }
}

