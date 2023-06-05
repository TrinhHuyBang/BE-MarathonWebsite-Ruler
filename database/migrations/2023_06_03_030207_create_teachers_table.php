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
            $table->double('rating', 2,1);
            $table->string('cv_url');
            $table->enum('level', ['A1', 'A2', 'B1', 'B2', 'C1', 'C2']);
            $table->string('address');
            $table->integer('age');
            $table->string('route');
            $table->string('goal');
            $table->unsignedBigInteger('salary');
            $table->text('other_requirements');
            $table->string('phone', 50)->unique();
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
