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
            ['id' => 1, 'name' => 'Nguyễn Thị Thu', 'sex' => 'female', 'email' => 'thunguyen98@gmail.com', 'role' => 'user', 'password' => bcrypt('123456'), 'avatar' => 'https://leminhhoang.vn/wp-content/uploads/2023/05/chon-loc-anh-avatar-buon.jpg', 'address' => 'Ba Dinh', 'level' => 'A1', 'desired_place' => 'Ba Dinh', 'desired_gender' => 'female', 'desired_goal' => '仕事に行く', 'desired_level' => 'A1'],
            ['id' => 2, 'name' => 'Trần Văn Minh', 'sex' => 'male', 'email' => 'minhtran99@gmail.com', 'role' => 'user', 'password' => bcrypt('123456'), 'avatar' => 'https://antimatter.vn/wp-content/uploads/2022/04/avatar-doi-nguoi-that-ngau-cho-nam.jpg', 'address' => 'Hoan Kiem', 'level' => 'A2', 'desired_place' => 'Hoan Kiem', 'desired_gender' => 'male', 'desired_goal' => '勉強', 'desired_level' => 'A2'],
            ['id' => 3, 'name' => 'Lê Thị Ánh', 'sex' => 'female', 'email' => 'anhle98@gmail.com', 'role' => 'user', 'password' => bcrypt('123456'), 'avatar' => 'https://toigingiuvedep.vn/wp-content/uploads/2022/11/avatar-dep-nu-cho-con-gai.jpg', 'address' => 'Hai Ba Trung', 'level' => 'B1', 'desired_place' => 'Hai Ba Trung', 'desired_gender' => 'female', 'desired_goal' => '試験に受ける', 'desired_level' => 'B1'],
            ['id' => 4, 'name' => 'Phạm Đức Trung', 'sex' => 'male', 'email' => 'trungpham93@gmail.com', 'role' => 'user', 'password' => bcrypt('123456'), 'avatar' => 'https://upanh123.com/wp-content/uploads/2020/12/avatar-nam.jpg', 'address' => 'Dong Da', 'level' => 'B2', 'desired_place' => 'Dong Da', 'desired_gender' => 'male', 'desired_goal' => '基本的なコミュニケーション', 'desired_level' => 'B2'],
            ['id' => 5, 'name' => 'Vũ Thị Mai Phương', 'sex' => 'female', 'email' => 'phuongvu97@gmail.com', 'role' => 'user', 'password' => bcrypt('123456'), 'avatar' => 'https://anhdephd.vn/wp-content/uploads/2022/02/tai-anh-avatar-dep-hinh-dai-dien-facebook.jpg', 'address' => 'Tay Ho', 'level' => 'C1', 'desired_place' => 'Tay Ho', 'desired_gender' => 'female', 'desired_goal' => '仕事に行く', 'desired_level' => 'C1'],
            ['id' => 6, 'name' => 'Hoàng Trung Hiếu ', 'sex' => 'male', 'email' => 'hieuhoang94@gmail.com', 'role' => 'user', 'password' => bcrypt('123456'), 'avatar' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZiOs1UwbiYbjcA6S7fTzCYL4E-WrAwiYLG3eCDssLJKTtJLteogeRwAbcmqY0bjGnWGQ&usqp=CAU', 'address' => 'Cau Giay', 'level' => 'C2', 'desired_place' => 'Cau Giay', 'desired_gender' => 'male', 'desired_goal' => '勉強', 'desired_level' => 'C2'],
            ['id' => 7, 'name' => 'Ngô Việt Bắc', 'sex' => 'male', 'email' => 'bacngo2k@gmail.com', 'role' => 'user', 'password' => bcrypt('123456'), 'avatar' => 'https://www.vivosmartphone.vn/uploads/MANGOADS/Selfie%20n%E1%BB%AF/A%20%C4%91%E1%BA%BFn%20Z/3.jpg', 'address' => 'Thanh Xuan', 'level' => 'A1', 'desired_place' => 'Thanh Xuan', 'desired_gender' => 'male', 'desired_goal' => '試験に受ける', 'desired_level' => 'A1'],
            ['id' => 8, 'name' => 'Nguyễn Đức Long', 'sex' => 'male', 'email' => 'longnguyen95@gmail.com', 'role' => 'user', 'password' => bcrypt('123456'), 'avatar' => 'https://toanthaydinh.com/wp-content/uploads/2020/04/avatar-dep-trai-10.jpg', 'address' => 'Hoang Mai', 'level' => 'A2', 'desired_place' => 'Hoang Mai', 'desired_gender' => 'male', 'desired_goal' => '基本的なコミュニケーション', 'desired_level' => 'A2'],
            ['id' => 9, 'name' => 'Bùi Xuân Thủy', 'sex' => 'female', 'email' => 'thuybui91@gmail.com', 'role' => 'user', 'password' => bcrypt('123456'), 'avatar' => 'https://leminhhoang.vn/wp-content/uploads/2023/05/chon-loc-anh-avatar-buon.jpg', 'address' => 'Long Bien', 'level' => 'B1', 'desired_place' => 'Long Bien', 'desired_gender' => 'female', 'desired_goal' => '仕事に行く', 'desired_level' => 'B1'],
            ['id' => 10, 'name' => 'Trần Huy Phúc', 'sex' => 'male', 'email' => 'phuctran99@gmail.com', 'role' => 'user', 'password' => bcrypt('123456'), 'avatar' => 'https://anhdep123.com/wp-content/uploads/2021/02/anh-hoc-sinh-dep.jpg', 'address' => 'Long Bien', 'level' => 'B2', 'desired_place' => 'Long Bien', 'desired_gender' => 'male', 'desired_goal' => '勉強', 'desired_level' => 'B2']
        ]);
    }
}
