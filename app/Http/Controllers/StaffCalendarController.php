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
        $now = Carbon::now();
        $upcomingWeek = array(
            "day1" => Carbon::now()->format('d.m.Y l'),
            "day2" => Carbon::now()->addDay()->format('d.m.Y l'),
            "day3" => Carbon::now()->addDay(2)->format('d.m.Y l'),
            "day4" => Carbon::now()->addDay(3)->format('d.m.Y l'),
            "day5" => Carbon::now()->addDay(4)->format('d.m.Y l'),
            "day6" => Carbon::now()->addDay(5)->format('d.m.Y l'),
            "day7" => Carbon::now()->addDay(6)->format('d.m.Y l'),




        );

        return Inertia::render('MySchedule', [
            'user' => $user,
            'date' => $upcomingWeek

        ]);
    }
}
