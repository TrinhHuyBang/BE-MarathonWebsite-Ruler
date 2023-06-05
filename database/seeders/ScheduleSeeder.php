<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schedules')->insert(
            [
                ['day_of_week' => 'Monday', 'time_slot' => 1],
                ['day_of_week' => 'Monday', 'time_slot' => 2],
                ['day_of_week' => 'Monday', 'time_slot' => 3],
                ['day_of_week' => 'Monday', 'time_slot' => 4],
                ['day_of_week' => 'Monday', 'time_slot' => 5],
                ['day_of_week' => 'Monday', 'time_slot' => 6],
                ['day_of_week' => 'Monday', 'time_slot' => 7],
                ['day_of_week' => 'Monday', 'time_slot' => 8],
                ['day_of_week' => 'Monday', 'time_slot' => 9],
                ['day_of_week' => 'Monday', 'time_slot' => 10],
                ['day_of_week' => 'Monday', 'time_slot' => 11],
                ['day_of_week' => 'Monday', 'time_slot' => 12],
                ['day_of_week' => 'Monday', 'time_slot' => 13],
                ['day_of_week' => 'Monday', 'time_slot' => 14],
                ['day_of_week' => 'Tuesday', 'time_slot' => 1],
                ['day_of_week' => 'Tuesday', 'time_slot' => 2],
                ['day_of_week' => 'Tuesday', 'time_slot' => 3],
                ['day_of_week' => 'Tuesday', 'time_slot' => 4],
                ['day_of_week' => 'Tuesday', 'time_slot' => 5],
                ['day_of_week' => 'Tuesday', 'time_slot' => 6],
                ['day_of_week' => 'Tuesday', 'time_slot' => 7],
                ['day_of_week' => 'Tuesday', 'time_slot' => 8],
                ['day_of_week' => 'Tuesday', 'time_slot' => 9],
                ['day_of_week' => 'Tuesday', 'time_slot' => 10],
                ['day_of_week' => 'Tuesday', 'time_slot' => 11],
                ['day_of_week' => 'Tuesday', 'time_slot' => 12],
                ['day_of_week' => 'Tuesday', 'time_slot' => 13],
                ['day_of_week' => 'Tuesday', 'time_slot' => 14],
                ['day_of_week' => 'Wednesday', 'time_slot' => 1],
                ['day_of_week' => 'Wednesday', 'time_slot' => 2],
                ['day_of_week' => 'Wednesday', 'time_slot' => 3],
                ['day_of_week' => 'Wednesday', 'time_slot' => 4],
                ['day_of_week' => 'Wednesday', 'time_slot' => 5],
                ['day_of_week' => 'Wednesday', 'time_slot' => 6],
                ['day_of_week' => 'Wednesday', 'time_slot' => 7],
                ['day_of_week' => 'Wednesday', 'time_slot' => 8],
                ['day_of_week' => 'Wednesday', 'time_slot' => 9],
                ['day_of_week' => 'Wednesday', 'time_slot' => 10],
                ['day_of_week' => 'Wednesday', 'time_slot' => 11],
                ['day_of_week' => 'Wednesday', 'time_slot' => 12],
                ['day_of_week' => 'Wednesday', 'time_slot' => 13],
                ['day_of_week' => 'Wednesday', 'time_slot' => 14],
                ['day_of_week' => 'Thursday', 'time_slot' => 1],
                ['day_of_week' => 'Thursday', 'time_slot' => 2],
                ['day_of_week' => 'Thursday', 'time_slot' => 3],
                ['day_of_week' => 'Thursday', 'time_slot' => 4],
                ['day_of_week' => 'Thursday', 'time_slot' => 5],
                ['day_of_week' => 'Thursday', 'time_slot' => 6],
                ['day_of_week' => 'Thursday', 'time_slot' => 7],
                ['day_of_week' => 'Thursday', 'time_slot' => 8],
                ['day_of_week' => 'Thursday', 'time_slot' => 9],
                ['day_of_week' => 'Thursday', 'time_slot' => 10],
                ['day_of_week' => 'Thursday', 'time_slot' => 11],
                ['day_of_week' => 'Thursday', 'time_slot' => 12],
                ['day_of_week' => 'Thursday', 'time_slot' => 13],
                ['day_of_week' => 'Thursday', 'time_slot' => 14],
                ['day_of_week' => 'Friday', 'time_slot' => 1],
                ['day_of_week' => 'Friday', 'time_slot' => 2],
                ['day_of_week' => 'Friday', 'time_slot' => 3],
                ['day_of_week' => 'Friday', 'time_slot' => 4],
                ['day_of_week' => 'Friday', 'time_slot' => 5],
                ['day_of_week' => 'Friday', 'time_slot' => 6],
                ['day_of_week' => 'Friday', 'time_slot' => 7],
                ['day_of_week' => 'Friday', 'time_slot' => 8],
                ['day_of_week' => 'Friday', 'time_slot' => 9],
                ['day_of_week' => 'Friday', 'time_slot' => 10],
                ['day_of_week' => 'Friday', 'time_slot' => 11],
                ['day_of_week' => 'Friday', 'time_slot' => 12],
                ['day_of_week' => 'Friday', 'time_slot' => 13],
                ['day_of_week' => 'Friday', 'time_slot' => 14],
                ['day_of_week' => 'Saturday', 'time_slot' => 1],
                ['day_of_week' => 'Saturday', 'time_slot' => 2],
                ['day_of_week' => 'Saturday', 'time_slot' => 3],
                ['day_of_week' => 'Saturday', 'time_slot' => 4],
                ['day_of_week' => 'Saturday', 'time_slot' => 5],
                ['day_of_week' => 'Saturday', 'time_slot' => 6],
                ['day_of_week' => 'Saturday', 'time_slot' => 7],
                ['day_of_week' => 'Saturday', 'time_slot' => 8],
                ['day_of_week' => 'Saturday', 'time_slot' => 9],
                ['day_of_week' => 'Saturday', 'time_slot' => 10],
                ['day_of_week' => 'Saturday', 'time_slot' => 11],
                ['day_of_week' => 'Saturday', 'time_slot' => 12],
                ['day_of_week' => 'Saturday', 'time_slot' => 13],
                ['day_of_week' => 'Saturday', 'time_slot' => 14],
                ['day_of_week' => 'Sunday', 'time_slot' => 1],
                ['day_of_week' => 'Sunday', 'time_slot' => 2],
                ['day_of_week' => 'Sunday', 'time_slot' => 3],
                ['day_of_week' => 'Sunday', 'time_slot' => 4],
                ['day_of_week' => 'Sunday', 'time_slot' => 5],
                ['day_of_week' => 'Sunday', 'time_slot' => 6],
                ['day_of_week' => 'Sunday', 'time_slot' => 7],
                ['day_of_week' => 'Sunday', 'time_slot' => 8],
                ['day_of_week' => 'Sunday', 'time_slot' => 9],
                ['day_of_week' => 'Sunday', 'time_slot' => 10],
                ['day_of_week' => 'Sunday', 'time_slot' => 11],
                ['day_of_week' => 'Sunday', 'time_slot' => 12],
                ['day_of_week' => 'Sunday', 'time_slot' => 13],
                ['day_of_week' => 'Sunday', 'time_slot' => 14]
            ]
        );
    }
}
