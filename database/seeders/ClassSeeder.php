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
        DB::table('classes')->insert(
            [
                ['id' => 1, 'teacher_id' => 1, 'name' => 'Thu', 'type' => 'online', 'start_date' => '2023-06-18', 'end_date' => '2023-08-15', 'max_student' => 22, 'fee' => 100000, 'goal' => '仕事に行く', 'level' => 'A1'],
                ['id' => 2, 'teacher_id' => 1, 'name' => 'Minh', 'type' => 'online', 'start_date' => '2023-06-12', 'end_date' => '2023-08-17', 'max_student' => 21, 'fee' => 80000, 'goal' => '勉強', 'level' => 'A2'],
                ['id' => 3, 'teacher_id' => 1, 'name' => 'Anh', 'type' => 'online', 'start_date' => '2023-06-25', 'end_date' => '2023-08-17', 'max_student' => 20, 'fee' => 150000, 'goal' => '試験に受ける', 'level' => 'B1'],
                ['id' => 4, 'teacher_id' => 2, 'name' => 'Trung', 'type' => 'online', 'start_date' => '2023-06-10', 'end_date' => '2023-08-15', 'max_student' => 23, 'fee' => 120000, 'goal' => '基本的なコミュニケーション', 'level' => 'B2'],
                ['id' => 5, 'teacher_id' => 2, 'name' => 'Phuong', 'type' => 'online', 'start_date' => '2023-07-03', 'end_date' => '2023-08-15', 'max_student' => 23, 'fee' => 150000, 'goal' => '仕事に行く', 'level' => 'C1'],
                ['id' => 6, 'teacher_id' => 3, 'name' => 'Hieu', 'type' => 'online', 'start_date' => '2023-06-09', 'end_date' => '2023-08-15', 'max_student' => 28, 'fee' => 100000, 'goal' => '勉強', 'level' => 'C2'],
                ['id' => 7, 'teacher_id' => 3, 'name' => 'Bac', 'type' => 'online', 'start_date' => '2023-06-27', 'end_date' => '2023-08-17', 'max_student' => 26, 'fee' => 100000, 'goal' => '試験に受ける', 'level' => 'A1'],
                ['id' => 8, 'teacher_id' => 4, 'name' => 'Long', 'type' => 'online', 'start_date' => '2023-07-03', 'end_date' => '2023-08-17', 'max_student' => 30, 'fee' => 120000, 'goal' => '基本的なコミュニケーション', 'level' => 'A2'],
                ['id' => 9, 'teacher_id' => 4, 'name' => 'Thuy', 'type' => 'online', 'start_date' => '2023-06-27', 'end_date' => '2023-08-16', 'max_student' => 29, 'fee' => 150000, 'goal' => '仕事に行く', 'level' => 'B1'],
                ['id' => 10, 'teacher_id' => 5, 'name' => 'Phuc', 'type' => 'online', 'start_date' => '2023-07-04', 'end_date' => '2023-08-15', 'max_student' => 28, 'fee' => 100000, 'goal' => '勉強', 'level' => 'B2'],
                ['id' => 11, 'teacher_id' => 5, 'name' => 'Thu', 'type' => 'online', 'start_date' => '2023-06-28', 'end_date' => '2023-08-15', 'max_student' => 30, 'fee' => 150000, 'goal' => '試験に受ける', 'level' => 'A1'],
                ['id' => 12, 'teacher_id' => 6, 'name' => 'Minh', 'type' => 'online', 'start_date' => '2023-07-09', 'end_date' => '2023-08-16', 'max_student' => 21, 'fee' => 100000, 'goal' => '基本的なコミュニケーション', 'level' => 'A2'],
                ['id' => 13, 'teacher_id' => 6, 'name' => 'Anh', 'type' => 'online', 'start_date' => '2023-07-09', 'end_date' => '2023-08-17', 'max_student' => 28, 'fee' => 150000, 'goal' => '仕事に行く', 'level' => 'B1'],
                ['id' => 14, 'teacher_id' => 7, 'name' => 'Trung', 'type' => 'online', 'start_date' => '2023-06-26', 'end_date' => '2023-08-16', 'max_student' => 22, 'fee' => 100000, 'goal' => '勉強', 'level' => 'B2'],
                ['id' => 15, 'teacher_id' => 7, 'name' => 'Phuong', 'type' => 'online', 'start_date' => '2023-06-28', 'end_date' => '2023-08-15', 'max_student' => 25, 'fee' => 120000, 'goal' => '試験に受ける', 'level' => 'C1'],
                ['id' => 16, 'teacher_id' => 8, 'name' => 'Hieu', 'type' => 'online', 'start_date' => '2023-06-08', 'end_date' => '2023-08-15', 'max_student' => 30, 'fee' => 120000, 'goal' => '基本的なコミュニケーション', 'level' => 'C2'],
                ['id' => 17, 'teacher_id' => 8, 'name' => 'Bac', 'type' => 'online', 'start_date' => '2023-06-29', 'end_date' => '2023-08-17', 'max_student' => 23, 'fee' => 100000, 'goal' => '仕事に行く', 'level' => 'A1'],
                ['id' => 18, 'teacher_id' => 8, 'name' => 'Long', 'type' => 'online', 'start_date' => '2023-06-15', 'end_date' => '2023-08-16', 'max_student' => 26, 'fee' => 100000, 'goal' => '勉強', 'level' => 'A2'],
                ['id' => 19, 'teacher_id' => 9, 'name' => 'Thuy', 'type' => 'online', 'start_date' => '2023-07-04', 'end_date' => '2023-08-16', 'max_student' => 22, 'fee' => 120000, 'goal' => '試験に受ける', 'level' => 'B1'],
                ['id' => 20, 'teacher_id' => 9, 'name' => 'Phuc', 'type' => 'online', 'start_date' => '2023-06-05', 'end_date' => '2023-08-15', 'max_student' => 22, 'fee' => 100000, 'goal' => '基本的なコミュニケーション', 'level' => 'B2'],
                ['id' => 21, 'teacher_id' => 10, 'name' => 'Thu', 'type' => 'online', 'start_date' => '2023-06-19', 'end_date' => '2023-08-15', 'max_student' => 20, 'fee' => 150000, 'goal' => '仕事に行く', 'level' => 'C1'],
                ['id' => 22, 'teacher_id' => 10, 'name' => 'Minh', 'type' => 'online', 'start_date' => '2023-06-08', 'end_date' => '2023-08-17', 'max_student' => 23, 'fee' => 100000, 'goal' => '勉強', 'level' => 'C2'],
                ['id' => 23, 'teacher_id' => 11, 'name' => 'Anh', 'type' => 'online', 'start_date' => '2023-06-11', 'end_date' => '2023-08-16', 'max_student' => 26, 'fee' => 100000, 'goal' => '試験に受ける', 'level' => 'A1'],
                ['id' => 24, 'teacher_id' => 11, 'name' => 'Trung', 'type' => 'online', 'start_date' => '2023-06-06', 'end_date' => '2023-08-16', 'max_student' => 22, 'fee' => 120000, 'goal' => '基本的なコミュニケーション', 'level' => 'A2'],
                ['id' => 25, 'teacher_id' => 11, 'name' => 'Phuong', 'type' => 'online', 'start_date' => '2023-06-10', 'end_date' => '2023-08-17', 'max_student' => 25, 'fee' => 80000, 'goal' => '仕事に行く', 'level' => 'B1'],
                ['id' => 26, 'teacher_id' => 12, 'name' => 'Hieu', 'type' => 'online', 'start_date' => '2023-06-15', 'end_date' => '2023-08-17', 'max_student' => 24, 'fee' => 120000, 'goal' => '勉強', 'level' => 'B2'],
                ['id' => 27, 'teacher_id' => 13, 'name' => 'Bac', 'type' => 'online', 'start_date' => '2023-06-09', 'end_date' => '2023-08-16', 'max_student' => 23, 'fee' => 100000, 'goal' => '試験に受ける', 'level' => 'A1'],
                ['id' => 28, 'teacher_id' => 14, 'name' => 'Long', 'type' => 'online', 'start_date' => '2023-07-09', 'end_date' => '2023-08-17', 'max_student' => 21, 'fee' => 100000, 'goal' => '基本的なコミュニケーション', 'level' => 'A2'],
                ['id' => 29, 'teacher_id' => 15, 'name' => 'Thuy', 'type' => 'online', 'start_date' => '2023-06-25', 'end_date' => '2023-08-15', 'max_student' => 23, 'fee' => 120000, 'goal' => '仕事に行く', 'level' => 'B1'],
                ['id' => 30, 'teacher_id' => 15, 'name' => 'Phuc', 'type' => 'online', 'start_date' => '2023-06-08', 'end_date' => '2023-08-15', 'max_student' => 22, 'fee' => 150000, 'goal' => '勉強', 'level' => 'B2'],
                ['id' => 31, 'teacher_id' => 16, 'name' => 'Thu', 'type' => 'online', 'start_date' => '2023-06-12', 'end_date' => '2023-08-16', 'max_student' => 25, 'fee' => 150000, 'goal' => '試験に受ける', 'level' => 'C1'],
                ['id' => 32, 'teacher_id' => 16, 'name' => 'Minh', 'type' => 'online', 'start_date' => '2023-06-09', 'end_date' => '2023-08-17', 'max_student' => 20, 'fee' => 80000, 'goal' => '基本的なコミュニケーション', 'level' => 'C2'],
                ['id' => 33, 'teacher_id' => 17, 'name' => 'Anh', 'type' => 'online', 'start_date' => '2023-06-07', 'end_date' => '2023-08-17', 'max_student' => 29, 'fee' => 100000, 'goal' => '仕事に行く', 'level' => 'A1'],
                ['id' => 34, 'teacher_id' => 17, 'name' => 'Trung', 'type' => 'online', 'start_date' => '2023-06-10', 'end_date' => '2023-08-17', 'max_student' => 30, 'fee' => 80000, 'goal' => '勉強', 'level' => 'A2'],
                ['id' => 35, 'teacher_id' => 18, 'name' => 'Phuong', 'type' => 'online', 'start_date' => '2023-07-04', 'end_date' => '2023-08-15', 'max_student' => 21, 'fee' => 120000, 'goal' => '試験に受ける', 'level' => 'B1'],
                ['id' => 36, 'teacher_id' => 18, 'name' => 'Hieu', 'type' => 'online', 'start_date' => '2023-06-12', 'end_date' => '2023-08-17', 'max_student' => 26, 'fee' => 80000, 'goal' => '基本的なコミュニケーション', 'level' => 'B2'],
                ['id' => 37, 'teacher_id' => 19, 'name' => 'Bac', 'type' => 'online', 'start_date' => '2023-07-09', 'end_date' => '2023-08-17', 'max_student' => 22, 'fee' => 100000, 'goal' => '仕事に行く', 'level' => 'C1'],
                ['id' => 38, 'teacher_id' => 19, 'name' => 'Long', 'type' => 'online', 'start_date' => '2023-06-20', 'end_date' => '2023-08-15', 'max_student' => 20, 'fee' => 100000, 'goal' => '勉強', 'level' => 'C2'],
                ['id' => 39, 'teacher_id' => 20, 'name' => 'Thuy', 'type' => 'online', 'start_date' => '2023-06-06', 'end_date' => '2023-08-15', 'max_student' => 28, 'fee' => 120000, 'goal' => '試験に受ける', 'level' => 'A1'],
                ['id' => 40, 'teacher_id' => 20, 'name' => 'Phuc', 'type' => 'online', 'start_date' => '2023-07-01', 'end_date' => '2023-08-15', 'max_student' => 22, 'fee' => 120000, 'goal' => '基本的なコミュニケーション', 'level' => 'A2'],
                ['id' => 41, 'teacher_id' => 21, 'name' => 'Thu', 'type' => 'online', 'start_date' => '2023-06-25', 'end_date' => '2023-08-17', 'max_student' => 30, 'fee' => 80000, 'goal' => '仕事に行く', 'level' => 'B1'],
                ['id' => 42, 'teacher_id' => 21, 'name' => 'Minh', 'type' => 'online', 'start_date' => '2023-07-09', 'end_date' => '2023-08-17', 'max_student' => 30, 'fee' => 100000, 'goal' => '勉強', 'level' => 'B2'],
                ['id' => 43, 'teacher_id' => 22, 'name' => 'Anh', 'type' => 'online', 'start_date' => '2023-07-01', 'end_date' => '2023-08-16', 'max_student' => 25, 'fee' => 100000, 'goal' => '試験に受ける', 'level' => 'C1'],
                ['id' => 44, 'teacher_id' => 22, 'name' => 'Trung', 'type' => 'online', 'start_date' => '2023-06-28', 'end_date' => '2023-08-17', 'max_student' => 27, 'fee' => 100000, 'goal' => '基本的なコミュニケーション', 'level' => 'C2'],
                ['id' => 45, 'teacher_id' => 23, 'name' => 'Phuong', 'type' => 'online', 'start_date' => '2023-07-05', 'end_date' => '2023-08-16', 'max_student' => 24, 'fee' => 150000, 'goal' => '仕事に行く', 'level' => 'A1'],
                ['id' => 46, 'teacher_id' => 23, 'name' => 'Hieu', 'type' => 'online', 'start_date' => '2023-06-13', 'end_date' => '2023-08-17', 'max_student' => 27, 'fee' => 120000, 'goal' => '勉強', 'level' => 'A2'],
                ['id' => 47, 'teacher_id' => 24, 'name' => 'Bac', 'type' => 'online', 'start_date' => '2023-07-05', 'end_date' => '2023-08-15', 'max_student' => 21, 'fee' => 100000, 'goal' => '試験に受ける', 'level' => 'B1'],
                ['id' => 48, 'teacher_id' => 24, 'name' => 'Long', 'type' => 'online', 'start_date' => '2023-06-27', 'end_date' => '2023-08-15', 'max_student' => 21, 'fee' => 120000, 'goal' => '基本的なコミュニケーション', 'level' => 'B2'],
                ['id' => 49, 'teacher_id' => 25, 'name' => 'Thuy', 'type' => 'online', 'start_date' => '2023-06-26', 'end_date' => '2023-08-16', 'max_student' => 23, 'fee' => 150000, 'goal' => '仕事に行く', 'level' => 'C1'],
                ['id' => 50, 'teacher_id' => 26, 'name' => 'Phuc', 'type' => 'offline', 'start_date' => '2023-07-09', 'end_date' => '2023-08-17', 'max_student' => 25, 'fee' => 100000, 'goal' => '勉強', 'level' => 'C2'],
                ['id' => 51, 'teacher_id' => 27, 'name' => 'Thu', 'type' => 'offline', 'start_date' => '2023-07-08', 'end_date' => '2023-08-16', 'max_student' => 29, 'fee' => 100000, 'goal' => '試験に受ける', 'level' => 'A1'],
                ['id' => 52, 'teacher_id' => 27, 'name' => 'Minh', 'type' => 'offline', 'start_date' => '2023-06-07', 'end_date' => '2023-08-16', 'max_student' => 27, 'fee' => 80000, 'goal' => '基本的なコミュニケーション', 'level' => 'A2'],
                ['id' => 53, 'teacher_id' => 28, 'name' => 'Anh', 'type' => 'offline', 'start_date' => '2023-06-29', 'end_date' => '2023-08-16', 'max_student' => 20, 'fee' => 150000, 'goal' => '仕事に行く', 'level' => 'B1'],
                ['id' => 54, 'teacher_id' => 28, 'name' => 'Trung', 'type' => 'offline', 'start_date' => '2023-07-10', 'end_date' => '2023-08-15', 'max_student' => 23, 'fee' => 120000, 'goal' => '勉強', 'level' => 'B2'],
                ['id' => 55, 'teacher_id' => 29, 'name' => 'Phuong', 'type' => 'offline', 'start_date' => '2023-06-24', 'end_date' => '2023-08-15', 'max_student' => 23, 'fee' => 150000, 'goal' => '試験に受ける', 'level' => 'C1'],
                ['id' => 56, 'teacher_id' => 29, 'name' => 'Hieu', 'type' => 'offline', 'start_date' => '2023-07-06', 'end_date' => '2023-08-17', 'max_student' => 25, 'fee' => 100000, 'goal' => '基本的なコミュニケーション', 'level' => 'C2'],
                ['id' => 57, 'teacher_id' => 30, 'name' => 'Bac', 'type' => 'offline', 'start_date' => '2023-06-25', 'end_date' => '2023-08-16', 'max_student' => 27, 'fee' => 100000, 'goal' => '仕事に行く', 'level' => 'A1'],
                ['id' => 58, 'teacher_id' => 30, 'name' => 'Long', 'type' => 'offline', 'start_date' => '2023-06-15', 'end_date' => '2023-08-16', 'max_student' => 23, 'fee' => 120000, 'goal' => '勉強', 'level' => 'A2'],
                ['id' => 59, 'teacher_id' => 31, 'name' => 'Thuy', 'type' => 'offline', 'start_date' => '2023-06-24', 'end_date' => '2023-08-17', 'max_student' => 22, 'fee' => 150000, 'goal' => '試験に受ける', 'level' => 'B1'],
                ['id' => 60, 'teacher_id' => 31, 'name' => 'Phuc', 'type' => 'offline', 'start_date' => '2023-06-30', 'end_date' => '2023-08-15', 'max_student' => 24, 'fee' => 100000, 'goal' => '基本的なコミュニケーション', 'level' => 'B2'],
                ['id' => 61, 'teacher_id' => 32, 'name' => 'Thu', 'type' => 'offline', 'start_date' => '2023-07-06', 'end_date' => '2023-08-15', 'max_student' => 25, 'fee' => 150000, 'goal' => '仕事に行く', 'level' => 'A1'],
                ['id' => 62, 'teacher_id' => 32, 'name' => 'Minh', 'type' => 'offline', 'start_date' => '2023-06-28', 'end_date' => '2023-08-17', 'max_student' => 20, 'fee' => 100000, 'goal' => '勉強', 'level' => 'A2'],
                ['id' => 63, 'teacher_id' => 33, 'name' => 'Anh', 'type' => 'offline', 'start_date' => '2023-06-15', 'end_date' => '2023-08-17', 'max_student' => 21, 'fee' => 150000, 'goal' => '試験に受ける', 'level' => 'B1'],
                ['id' => 64, 'teacher_id' => 33, 'name' => 'Trung', 'type' => 'offline', 'start_date' => '2023-06-12', 'end_date' => '2023-08-17', 'max_student' => 20, 'fee' => 100000, 'goal' => '基本的なコミュニケーション', 'level' => 'B2'],
                ['id' => 65, 'teacher_id' => 34, 'name' => 'Phuong', 'type' => 'offline', 'start_date' => '2023-07-10', 'end_date' => '2023-08-15', 'max_student' => 27, 'fee' => 120000, 'goal' => '仕事に行く', 'level' => 'C1'],
                ['id' => 66, 'teacher_id' => 34, 'name' => 'Hieu', 'type' => 'offline', 'start_date' => '2023-07-02', 'end_date' => '2023-08-17', 'max_student' => 21, 'fee' => 120000, 'goal' => '勉強', 'level' => 'C2'],
                ['id' => 67, 'teacher_id' => 34, 'name' => 'Bac', 'type' => 'offline', 'start_date' => '2023-06-11', 'end_date' => '2023-08-16', 'max_student' => 25, 'fee' => 100000, 'goal' => '試験に受ける', 'level' => 'A1'],
                ['id' => 68, 'teacher_id' => 35, 'name' => 'Long', 'type' => 'offline', 'start_date' => '2023-06-29', 'end_date' => '2023-08-17', 'max_student' => 24, 'fee' => 100000, 'goal' => '基本的なコミュニケーション', 'level' => 'A2'],
                ['id' => 69, 'teacher_id' => 35, 'name' => 'Thuy', 'type' => 'offline', 'start_date' => '2023-07-02', 'end_date' => '2023-08-17', 'max_student' => 24, 'fee' => 120000, 'goal' => '仕事に行く', 'level' => 'B1'],
                ['id' => 70, 'teacher_id' => 36, 'name' => 'Phuc', 'type' => 'offline', 'start_date' => '2023-07-05', 'end_date' => '2023-08-17', 'max_student' => 25, 'fee' => 100000, 'goal' => '勉強', 'level' => 'B2'],
                ['id' => 71, 'teacher_id' => 37, 'name' => 'Thu', 'type' => 'offline', 'start_date' => '2023-06-26', 'end_date' => '2023-08-16', 'max_student' => 23, 'fee' => 150000, 'goal' => '試験に受ける', 'level' => 'C1'],
                ['id' => 72, 'teacher_id' => 37, 'name' => 'Minh', 'type' => 'offline', 'start_date' => '2023-06-05', 'end_date' => '2023-08-17', 'max_student' => 20, 'fee' => 100000, 'goal' => '基本的なコミュニケーション', 'level' => 'C2'],
                ['id' => 73, 'teacher_id' => 38, 'name' => 'Anh', 'type' => 'offline', 'start_date' => '2023-06-25', 'end_date' => '2023-08-15', 'max_student' => 26, 'fee' => 100000, 'goal' => '仕事に行く', 'level' => 'A1'],
                ['id' => 74, 'teacher_id' => 38, 'name' => 'Trung', 'type' => 'offline', 'start_date' => '2023-07-04', 'end_date' => '2023-08-16', 'max_student' => 23, 'fee' => 120000, 'goal' => '勉強', 'level' => 'A2'],
                ['id' => 75, 'teacher_id' => 39, 'name' => 'Phuong', 'type' => 'offline', 'start_date' => '2023-06-29', 'end_date' => '2023-08-17', 'max_student' => 26, 'fee' => 80000, 'goal' => '試験に受ける', 'level' => 'B1'],
                ['id' => 76, 'teacher_id' => 39, 'name' => 'Hieu', 'type' => 'offline', 'start_date' => '2023-06-22', 'end_date' => '2023-08-15', 'max_student' => 28, 'fee' => 120000, 'goal' => '基本的なコミュニケーション', 'level' => 'B2'],
                ['id' => 77, 'teacher_id' => 39, 'name' => 'Bac', 'type' => 'offline', 'start_date' => '2023-07-04', 'end_date' => '2023-08-16', 'max_student' => 28, 'fee' => 100000, 'goal' => '仕事に行く', 'level' => 'A1'],
                ['id' => 80, 'teacher_id' => 41, 'name' => 'Phuc', 'type' => 'offline', 'start_date' => '2023-06-11', 'end_date' => '2023-08-15', 'max_student' => 25, 'fee' => 150000, 'goal' => '基本的なコミュニケーション', 'level' => 'B2'],
                ['id' => 81, 'teacher_id' => 41, 'name' => 'Thu', 'type' => 'offline', 'start_date' => '2023-06-14', 'end_date' => '2023-08-15', 'max_student' => 26, 'fee' => 150000, 'goal' => '仕事に行く', 'level' => 'C1'],
                ['id' => 82, 'teacher_id' => 42, 'name' => 'Minh', 'type' => 'offline', 'start_date' => '2023-06-26', 'end_date' => '2023-08-16', 'max_student' => 20, 'fee' => 80000, 'goal' => '勉強', 'level' => 'C2'],
                ['id' => 83, 'teacher_id' => 42, 'name' => 'Anh', 'type' => 'offline', 'start_date' => '2023-07-04', 'end_date' => '2023-08-16', 'max_student' => 21, 'fee' => 100000, 'goal' => '試験に受ける', 'level' => 'A1'],
                ['id' => 84, 'teacher_id' => 43, 'name' => 'Trung', 'type' => 'offline', 'start_date' => '2023-06-21', 'end_date' => '2023-08-16', 'max_student' => 25, 'fee' => 80000, 'goal' => '基本的なコミュニケーション', 'level' => 'A2'],
                ['id' => 85, 'teacher_id' => 43, 'name' => 'Phuong', 'type' => 'offline', 'start_date' => '2023-06-28', 'end_date' => '2023-08-17', 'max_student' => 28, 'fee' => 120000, 'goal' => '仕事に行く', 'level' => 'B1'],
                ['id' => 86, 'teacher_id' => 44, 'name' => 'Hieu', 'type' => 'offline', 'start_date' => '2023-07-03', 'end_date' => '2023-08-16', 'max_student' => 20, 'fee' => 80000, 'goal' => '勉強', 'level' => 'B2'],
                ['id' => 87, 'teacher_id' => 45, 'name' => 'Bac', 'type' => 'offline', 'start_date' => '2023-06-06', 'end_date' => '2023-08-17', 'max_student' => 23, 'fee' => 100000, 'goal' => '試験に受ける', 'level' => 'C1'],
                ['id' => 88, 'teacher_id' => 45, 'name' => 'Long', 'type' => 'offline', 'start_date' => '2023-06-13', 'end_date' => '2023-08-16', 'max_student' => 21, 'fee' => 100000, 'goal' => '基本的なコミュニケーション', 'level' => 'C2'],
                ['id' => 89, 'teacher_id' => 46, 'name' => 'Thuy', 'type' => 'offline', 'start_date' => '2023-07-02', 'end_date' => '2023-08-17', 'max_student' => 27, 'fee' => 120000, 'goal' => '仕事に行く', 'level' => 'A1'],
                ['id' => 90, 'teacher_id' => 46, 'name' => 'Phuc', 'type' => 'offline', 'start_date' => '2023-06-08', 'end_date' => '2023-08-16', 'max_student' => 29, 'fee' => 120000, 'goal' => '勉強', 'level' => 'A2'],
                ['id' => 91, 'teacher_id' => 47, 'name' => 'Thu', 'type' => 'offline', 'start_date' => '2023-07-04', 'end_date' => '2023-08-15', 'max_student' => 29, 'fee' => 80000, 'goal' => '試験に受ける', 'level' => 'B1'],
                ['id' => 92, 'teacher_id' => 47, 'name' => 'Minh', 'type' => 'offline', 'start_date' => '2023-07-10', 'end_date' => '2023-08-16', 'max_student' => 21, 'fee' => 100000, 'goal' => '基本的なコミュニケーション', 'level' => 'B2'],
                ['id' => 93, 'teacher_id' => 48, 'name' => 'Anh', 'type' => 'offline', 'start_date' => '2023-06-20', 'end_date' => '2023-08-16', 'max_student' => 25, 'fee' => 100000, 'goal' => '仕事に行く', 'level' => 'C1'],
                ['id' => 94, 'teacher_id' => 48, 'name' => 'Trung', 'type' => 'offline', 'start_date' => '2023-06-21', 'end_date' => '2023-08-16', 'max_student' => 20, 'fee' => 100000, 'goal' => '勉強', 'level' => 'C2'],
                ['id' => 95, 'teacher_id' => 48, 'name' => 'Phuong', 'type' => 'offline', 'start_date' => '2023-07-10', 'end_date' => '2023-08-16', 'max_student' => 25, 'fee' => 150000, 'goal' => '試験に受ける', 'level' => 'A1'],
                ['id' => 96, 'teacher_id' => 48, 'name' => 'Hieu', 'type' => 'offline', 'start_date' => '2023-06-24', 'end_date' => '2023-08-16', 'max_student' => 24, 'fee' => 120000, 'goal' => '基本的なコミュニケーション', 'level' => 'A2'],
                ['id' => 97, 'teacher_id' => 49, 'name' => 'Bac', 'type' => 'offline', 'start_date' => '2023-07-06', 'end_date' => '2023-08-15', 'max_student' => 24, 'fee' => 100000, 'goal' => '仕事に行く', 'level' => 'B1'],
                ['id' => 98, 'teacher_id' => 49, 'name' => 'Long', 'type' => 'offline', 'start_date' => '2023-06-19', 'end_date' => '2023-08-16', 'max_student' => 20, 'fee' => 120000, 'goal' => '勉強', 'level' => 'B2'],
                ['id' => 99, 'teacher_id' => 49, 'name' => 'Thuy', 'type' => 'offline', 'start_date' => '2023-06-26', 'end_date' => '2023-08-15', 'max_student' => 24, 'fee' => 150000, 'goal' => '試験に受ける', 'level' => 'C1'],
                ['id' => 100, 'teacher_id' => 50, 'name' => 'Phuc', 'type' => 'offline', 'start_date' => '2023-06-28', 'end_date' => '2023-08-17', 'max_student' => 29, 'fee' => 100000, 'goal' => '基本的なコミュニケーション', 'level' => 'C2'],
                ['id' => 101, 'teacher_id' => 50, 'name' => 'Phuc', 'type' => 'offline', 'start_date' => '2023-07-05', 'end_date' => '2023-08-17', 'max_student' => 29, 'fee' => 100000, 'goal' => '基本的なコミュニケーション', 'level' => 'C2']
            ]
        );
    }
}
