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
        Schema::create('Profile', function (Blueprint $table) {
            $table->id();
            $table->string('namaLengkap');
            $table->string('tempatLahir');
            $table->integer('nim');
            $table->integer('absen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Profile');
    }
};
