<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LiveAccount;

class LiveDashboardController extends Controller
{
    public function dashboardView()
    {
        $clients=  liveAccount::all();
        return view('liveaccount.liveDashboard')->with('clients',$clients);
    }
}
