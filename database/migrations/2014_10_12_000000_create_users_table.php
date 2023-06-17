<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->enum('sex', ['male', 'female', 'third gender']);
            $table->string('email', 50);
            $table->string('password', 50);
            $table->string('avatar');
            $table->enum('address',["Ba Đình", "Hoàn Kiếm", "Hai Bà Trưng", "Đống Đa", "Tây Hồ", "Cầu Giấy", "Thanh Xuân", "Hoàng Mai", "Long Biên", "Bắc Từ Liêm", "Nam Từ Liêm", "Hà Đông", "Sơn Tây", "Ba Vì", "Phúc Thọ", "Đan Phượng", "Hoài Đức", "Thạch Thất", "Quốc Oai","Chương Mỹ", "Thanh Oai", "Thường Tín", "Phú Xuyên", "Mê Linh", "Đông Anh", "Gia Lâm", "Sóc Sơn", "Thanh Trì", "Mỹ Đức", "Ứng Hòa"]);
            $table->enum('level', ['A1', 'A2', 'B1', 'B2', 'C1', 'C2']);
            $table->enum('desired_day',['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sundayy']);
            $table->enum('desired_time',[1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14]);
            $table->unsignedBigInteger('desired_price');
            $table->enum('desired_place',["Ba Đình", "Hoàn Kiếm", "Hai Bà Trưng", "Đống Đa", "Tây Hồ", "Cầu Giấy", "Thanh Xuân", "Hoàng Mai", "Long Biên", "Bắc Từ Liêm", "Nam Từ Liêm", "Hà Đông", "Sơn Tây", "Ba Vì", "Phúc Thọ", "Đan Phượng", "Hoài Đức", "Thạch Thất", "Quốc Oai","Chương Mỹ", "Thanh Oai", "Thường Tín", "Phú Xuyên", "Mê Linh", "Đông Anh", "Gia Lâm", "Sóc Sơn", "Thanh Trì", "Mỹ Đức", "Ứng Hòa"]);
            $table->enum('desired_gender',['male', 'female', 'third gender']);
            $table->enum('role', ['admin', 'user']);
            $table->enum('desired_goal',['仕事に行く', '勉強', '試験に受ける', '基本的なコミュニケーション']);
            $table->enum('desired_level', ['A1', 'A2', 'B1', 'B2', 'C1', 'C2']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
