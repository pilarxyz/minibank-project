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
        Schema::create('nasabahs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constranted();
            // $table->foreign('name')->references('name')->on('users');
            // $table->foreign('email')->references('email')->on('users');
            $table->string('phone');
            $table->string('nik');
            $table->string('born_place');
            $table->date('born_date');
            $table->string('address');
            $table->string('job');
            $table->string('remember_token')->nullable();
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
        Schema::dropIfExists('nasabah');
    }
};
