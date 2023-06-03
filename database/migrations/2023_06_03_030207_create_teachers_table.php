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
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->boolean('registration_status');
            $table->double('rating', 2,1);
            $table->string('cv_url');
            $table->string('level', 50);
            $table->string('timetable');
            $table->string('address');
            $table->integer('age');
            $table->string('root');
            $table->string('target');
            $table->enum('type', ['online', 'offline']);
            $table->unsignedBigInteger('salary');
            $table->text('other_requirements');
            $table->string('phone_number', 50)->unique();
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
