<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;


class StaffCalendarController extends Controller
{
    public function show()
    {
        $user = Auth::id();
        $now = now();
        $upcomingWeek = array(
            "day1" => $now()->format('l jS \\of F Y h:i:s A'),
            "day2" => 

    
    );
        return Inertia::render('MySchedule', [
            'user' => $user
        ]);
    }
}
