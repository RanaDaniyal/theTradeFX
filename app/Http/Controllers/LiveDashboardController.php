<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LiveDashboardController extends Controller
{
    public function dashboardView()
    {
        return view('liveaccount.liveDashboard');
    }
}
