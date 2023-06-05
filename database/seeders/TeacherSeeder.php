<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->insert([
            ['id' => 1, 'user_id' => 1, 'rating' => 4.2, 'cv_url' => 'https://cv/hmc20qpial', 'level' => 'A1', 'address' => 'Hai Ba Trung, Ha Noi', 'age' => 25, 'route' => '週2回、20回', 'goal' => '基本的なコミュニケーションのニーズに関連する頻繁に使用される文と言語構造を理解する', 'salary' => 100000, 'other_requirements' => '完全に学校に行く', 'phone' => '0982640564'],
            ['id' => 2, 'user_id' => 2, 'rating' => 3.5, 'cv_url' => 'https://cv/yzaae6yuib', 'level' => 'A2', 'address' => 'Cau Giay, Ha Noi', 'age' => 24, 'route' => '週3回、15回', 'goal' => '基本的なコミュニケーションのニーズに関連する頻繁に使用される文と言語構造を理解する', 'salary' => 80000, 'other_requirements' => '完全に学校に行く', 'phone' => '0347376412'],
            ['id' => 3, 'user_id' => 3, 'rating' => 4.9, 'cv_url' => 'https://cv/bl6xuxl036', 'level' => 'B1', 'address' => 'Ba Dinh, Ha Noi', 'age' => 25, 'route' => '週3回、20回', 'goal' => '身近な話題に関する明確で標準的な文章やスピーチの主要なアイデアを理解する', 'salary' => 150000, 'other_requirements' => '女子学生のみ受け入れ可能', 'phone' => '0912306573'],
            ['id' => 4, 'user_id' => 4, 'rating' => 4.1, 'cv_url' => 'https://cv/oy8e4uec17', 'level' => 'B2', 'address' => 'Binh Thanh, Ho Chi Minh', 'age' => 30, 'route' => '週2回、25回', 'goal' => '身近な話題に関する明確で標準的な文章やスピーチの主要なアイデアを理解する', 'salary' => 120000, 'other_requirements' => '女子学生のみ受け入れ可能', 'phone' => '0363683946'],
            ['id' => 5, 'user_id' => 5, 'rating' => 5, 'cv_url' => 'https://cv/dj5zprpi0e', 'level' => 'C1', 'address' => 'Hai Chau, Da Nang', 'age' => 26, 'route' => '週2回、30回', 'goal' => '自分の専門分野の会話を含む、さまざまなトピックに関する複雑なテキストの主なアイデアを理解する', 'salary' => 150000, 'other_requirements' => '女子学生のみ受け入れ可能', 'phone' => '0969888346'],
            ['id' => 6, 'user_id' => 6, 'rating' => 3.6, 'cv_url' => 'https://cv/mp11vzhdjf', 'level' => 'C2', 'address' => 'Hoan Kiem, Ha Noi', 'age' => 29, 'route' => '週2回、20回', 'goal' => '身近な話題に関する明確で標準的な文章やスピーチの主要なアイデアを理解する', 'salary' => 100000, 'other_requirements' => '男子生徒のみ受け入れ可能', 'phone' => '0982516983'],
            ['id' => 7, 'user_id' => 7, 'rating' => 4.4, 'cv_url' => 'https://cv/xf8ltn3h0q', 'level' => 'A1', 'address' => 'Ninh Kieu, Can Tho', 'age' => 23, 'route' => '週2回、20回', 'goal' => '身近な話題に関する明確で標準的な文章やスピーチの主要なアイデアを理解する', 'salary' => 100000, 'other_requirements' => '男子生徒のみ受け入れ可能', 'phone' => '0989116325'],
            ['id' => 8, 'user_id' => 8, 'rating' => 5, 'cv_url' => 'https://cv/m1ikjue1oz', 'level' => 'A2', 'address' => 'Phu Nhuan, Ho Chi Minh', 'age' => 28, 'route' => '週2回、20回', 'goal' => '長く広範囲にわたる文章の意味を認識し、理解する。 表現する言葉を見つけるのに苦労することなく、すぐに流暢に自分の考えを表現できる', 'salary' => 120000, 'other_requirements' => '男子生徒のみ受け入れ可能', 'phone' => '0912906368'],
            ['id' => 9, 'user_id' => 9, 'rating' => 3.8, 'cv_url' => 'https://cv/0txm8txr0q', 'level' => 'B1', 'address' => 'Tan Binh, Ho Chi Minh', 'age' => 32, 'route' => '週2回、30回', 'goal' => '長く広範囲にわたる文章の意味を認識し、理解する。 表現する言葉を見つけるのに苦労することなく、すぐに流暢に自分の考えを表現できる', 'salary' => 150000, 'other_requirements' => '男子生徒のみ受け入れ可能', 'phone' => '0949336508'],
            ['id' => 10, 'user_id' => 10, 'rating' => 4.8, 'cv_url' => 'https://cv/94t7zzef6j', 'level' => 'B2', 'address' => 'Cau Giay, Ha Noi', 'age' => 24, 'route' => '週1回、40回', 'goal' => '長く広範囲にわたる文章の意味を認識し、理解する。 表現する言葉を見つけるのに苦労することなく、すぐに流暢に自分の考えを表現できる', 'salary' => 100000, 'other_requirements' => '男子生徒のみ受け入れ可能', 'phone' => '0363598471']
        ]);
    }
}
