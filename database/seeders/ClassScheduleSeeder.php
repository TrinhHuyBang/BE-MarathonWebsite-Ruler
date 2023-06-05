<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('class_schedule')->insert([
            ['class_id' => 1, 'schedule_id' => 25],
            ['class_id' => 1, 'schedule_id' => 89],
            ['class_id' => 2, 'schedule_id' => 66],
            ['class_id' => 2, 'schedule_id' => 58],
            ['class_id' => 3, 'schedule_id' => 58],
            ['class_id' => 3, 'schedule_id' => 81],
            ['class_id' => 4, 'schedule_id' => 78],
            ['class_id' => 4, 'schedule_id' => 88],
            ['class_id' => 5, 'schedule_id' => 8],
            ['class_id' => 5, 'schedule_id' => 86],
            ['class_id' => 6, 'schedule_id' => 80],
            ['class_id' => 6, 'schedule_id' => 59],
            ['class_id' => 7, 'schedule_id' => 11],
            ['class_id' => 7, 'schedule_id' => 52],
            ['class_id' => 8, 'schedule_id' => 24],
            ['class_id' => 8, 'schedule_id' => 91],
            ['class_id' => 9, 'schedule_id' => 98],
            ['class_id' => 9, 'schedule_id' => 74],
            ['class_id' => 10, 'schedule_id' => 22],
            ['class_id' => 10, 'schedule_id' => 29]
        ]);
    }
}
