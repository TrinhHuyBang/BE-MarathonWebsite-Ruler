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
            $table->string('password');
            $table->string('avatar')->nullable();
            $table->enum('address',["Ba Dinh", "Hoan Kiem", "Hai Ba Trung", "Dong Da", "Tay Ho", "Cau Giay", "Thanh Xuan", "Hoang Mai", "Long Bien", "Bac Tu Liem", "Nam Tu Liem", "Ha Dong", "Son Tay", "Ba Vi", "Phuc Tho", "Dan Phuong", "Hoai Duc", "Thach That", "Quoc Oai","Chuong My", "Thanh Oai", "Thuong Tin", "Phu Xuyen", "Me Linh", "Dong Anh", "Gia Lam", "Soc Son", "Thanh Tri", "My Duc", "Ung Hoa"])->nullable();
            $table->enum('level', ['A1', 'A2', 'B1', 'B2', 'C1', 'C2'])->nullable();
            $table->enum('desired_day',['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sundayy'])->nullable();
            $table->enum('desired_time',[1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14])->nullable();
            $table->unsignedBigInteger('desired_price')->nullable();
            $table->enum('desired_place',["Ba Dinh", "Hoan Kiem", "Hai Ba Trung", "Dong Da", "Tay Ho", "Cau Giay", "Thanh Xuan", "Hoang Mai", "Long Bien", "Bac Tu Liem", "Nam Tu Liem", "Ha Dong", "Son Tay", "Ba Vi", "Phuc Tho", "Dan Phuong", "Hoai Duc", "Thach That", "Quoc Oai","Chuong My", "Thanh Oai", "Thuong Tin", "Phu Xuyen", "Me Linh", "Dong Anh", "Gia Lam", "Soc Son", "Thanh Tri", "My Duc", "Ung Hoa"])->nullable();
            $table->enum('desired_gender',['male', 'female', 'third gender'])->nullable();
            $table->enum('role', ['admin', 'user']);
            $table->enum('desired_goal',['仕事に行く', '勉強', '試験に受ける', '基本的なコミュニケーション'])->nullable();
            $table->enum('desired_level', ['A1', 'A2', 'B1', 'B2', 'C1', 'C2'])->nullable();
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
