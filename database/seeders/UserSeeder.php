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
            ['name' => 'Nguyen Thi Thu', 'sex' => 'female', 'email' => 'thunguyen98@gmail.com', 'password' => '123456', 'role' => 'teacher'],
            ['name' => 'Tran Van Minh', 'sex' => 'male', 'email' => 'minhtran99@gmail.com', 'password' => '123456', 'role' => 'teacher'],
            ['name' => 'Le Thi Anh', 'sex' => 'female', 'email' => 'anhle98@gmail.com', 'password' => '123456', 'role' => 'teacher'],
            ['name' => 'Pham Duc Trung', 'sex' => 'male', 'email' => 'trungpham93@gmail.com', 'password' => '123456', 'role' => 'teacher'],
            ['name' => 'Vu Thi Mai Phuong', 'sex' => 'female', 'email' => 'phuongvu97@gmail.com', 'password' => '123456', 'role' => 'teacher'],
            ['name' => 'Hoang Trung Hieu', 'sex' => 'male', 'email' => 'hieuhoang94@gmail.com', 'password' => '123456', 'role' => 'teacher'],
            ['name' => 'Ngo Viet Bac', 'sex' => 'male', 'email' => 'bacngo2k@gmail.com', 'password' => '123456', 'role' => 'teacher'],
            ['name' => 'Nguyen Duc Long', 'sex' => 'male', 'email' => 'longnguyen95@gmail.com', 'password' => '123456', 'role' => 'teacher'],
            ['name' => 'Bui Xuan Thuy', 'sex' => 'female', 'email' => 'thuybui91@gmail.com', 'password' => '123456', 'role' => 'teacher'],
            ['name' => 'Tran Huy Phuc', 'sex' => 'male', 'email' => 'phuctran99@gmail.com', 'password' => '123456', 'role' => 'teacher']
        ]);
    }
}
