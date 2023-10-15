<?php

namespace Database\Seeders;

use App\Models\Schedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($day = 1; $day <= 7; $day++) {
            $schedule = Schedule::findOneByDay($day);
            if (!$schedule) {
                $schedule = new Schedule();
                $schedule->day = $day;
            }
            $schedule->opening_hours = '09:00:00';
            $schedule->closing_hours = '22:00:00';
            $schedule->save();
        }
    }
}
