<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classes')->insert([
            ['teacher_id' => 1, 'name' => 'Thu', 'type' => 'online', 'start_date' => '2023-06-23', 'end_date' => '2023-08-17', 'max_student' => 26],
            ['teacher_id' => 2, 'name' => 'Minh', 'type' => 'offline', 'start_date' => '2023-07-07', 'end_date' => '2023-08-16', 'max_student' => 20],
            ['teacher_id' => 3, 'name' => 'Anh', 'type' => 'offline', 'start_date' => '2023-06-13', 'end_date' => '2023-08-17', 'max_student' => 25],
            ['teacher_id' => 4, 'name' => 'Trung', 'type' => 'online', 'start_date' => '2023-06-21', 'end_date' => '2023-08-17', 'max_student' => 22],
            ['teacher_id' => 5, 'name' => 'Phuong', 'type' => 'offline', 'start_date' => '2023-06-25', 'end_date' => '2023-08-16', 'max_student' => 28],
            ['teacher_id' => 6, 'name' => 'Hieu', 'type' => 'online', 'start_date' => '2023-06-22', 'end_date' => '2023-08-16', 'max_student' => 22],
            ['teacher_id' => 7, 'name' => 'Bac', 'type' => 'online', 'start_date' => '2023-06-26', 'end_date' => '2023-08-15', 'max_student' => 29],
            ['teacher_id' => 8, 'name' => 'Long', 'type' => 'offline', 'start_date' => '2023-06-12', 'end_date' => '2023-08-15', 'max_student' => 24],
            ['teacher_id' => 9, 'name' => 'Thuy', 'type' => 'offline', 'start_date' => '2023-06-27', 'end_date' => '2023-08-17', 'max_student' => 23],
            ['teacher_id' => 10, 'name' => 'Phuc', 'type' => 'online', 'start_date' => '2023-06-19', 'end_date' => '2023-08-17', 'max_student' => 29]
        ]);
    }
}
