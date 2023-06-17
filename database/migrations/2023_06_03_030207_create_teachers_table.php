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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->double('rating', 2,1);
            $table->string('cv_url');
            $table->enum('level', ['A1', 'A2', 'B1', 'B2', 'C1', 'C2']);
            $table->enum('address',["Ba Đình", "Hoàn Kiếm", "Hai Bà Trưng", "Đống Đa", "Tây Hồ", "Cầu Giấy", "Thanh Xuân", "Hoàng Mai", "Long Biên", "Bắc Từ Liêm", "Nam Từ Liêm", "Hà Đông", "Sơn Tây", "Ba Vì", "Phúc Thọ", "Đan Phượng", "Hoài Đức", "Thạch Thất", "Quốc Oai","Chương Mỹ", "Thanh Oai", "Thường Tín", "Phú Xuyên", "Mê Linh", "Đông Anh", "Gia Lâm", "Sóc Sơn", "Thanh Trì", "Mỹ Đức", "Ứng Hòa"]);
            $table->integer('age');
            $table->unsignedBigInteger('salary');
            $table->text('other_requirements');
            $table->string('phone', 50)->unique();
            $table->string('avatar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
};
