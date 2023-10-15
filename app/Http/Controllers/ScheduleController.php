<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        $schedules = [];
        for ($day = 1; $day <= 7; $day++) {
            $schedule = Schedule::findOneByDay($day);
            if (!$schedule) {
                $schedule = new Schedule();
                $schedule->day = $day;
            }
            $schedules[$day] = $schedule;
        }
        return view('schedule.index', ['schedule' => $schedules]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'opening_hours' => 'required',
            'closing_hours' => 'required',
        ]);

        $openingHours = $request->input('opening_hours', []);
        $closingHours = $request->input('closing_hours', []);

        for ($day = 1; $day <= 7; $day++) {
            $schedule = Schedule::findOneByDay($day);
            if (!$schedule) {
                $schedule = new Schedule();
                $schedule->day = $day;
            }
            $schedule->opening_hours = $openingHours[$day] ?? null;
            $schedule->closing_hours = $closingHours[$day] ?? null;
            $schedule->save();
        }

        return redirect()->route('schedule.index')->with('success', 'Schedule saved successfully!');
    }
}
