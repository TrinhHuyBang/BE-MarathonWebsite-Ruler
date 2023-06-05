<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'Nguyễn Thị Thu', 'sex' => 'female', 'email' => 'thunguyen98@gmail.com', 'password' => '123456', 'role' => 'teacher'],
            ['name' => 'Trần Văn Minh', 'sex' => 'male', 'email' => 'minhtran99@gmail.com', 'password' => '123456', 'role' => 'teacher'],
            ['name' => 'Lê Thị Ánh', 'sex' => 'female', 'email' => 'anhle98@gmail.com', 'password' => '123456', 'role' => 'teacher'],
            ['name' => 'Phạm Đức Trung', 'sex' => 'male', 'email' => 'trungpham93@gmail.com', 'password' => '123456', 'role' => 'teacher'],
            ['name' => 'Vũ Thị Mai Phương', 'sex' => 'female', 'email' => 'phuongvu97@gmail.com', 'password' => '123456', 'role' => 'teacher'],
            ['name' => 'Hoàng Trung Hiếu ', 'sex' => 'male', 'email' => 'hieuhoang94@gmail.com', 'password' => '123456', 'role' => 'teacher'],
            ['name' => 'Ngô Việt Bắc', 'sex' => 'male', 'email' => 'bacngo2k@gmail.com', 'password' => '123456', 'role' => 'teacher'],
            ['name' => 'Nguyễn Đức Long', 'sex' => 'male', 'email' => 'longnguyen95@gmail.com', 'password' => '123456', 'role' => 'teacher'],
            ['name' => 'Bùi Xuân Thủy', 'sex' => 'female', 'email' => 'thuybui91@gmail.com', 'password' => '123456', 'role' => 'teacher'],
            ['name' => 'Trần Huy Phúc', 'sex' => 'male', 'email' => 'phuctran99@gmail.com', 'password' => '123456', 'role' => 'teacher']
        ]);
    }
}
