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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->string('No_Urut', 25)->index()->primary();
            $table->string('Nama', 50)->index();
            $table->string('Alamat', 100)->index();
            $table->string('Bb_Lahir', 20)->index()->nullable();
            $table->string('Tb_Lahir', 20)->index()->nullable();
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
        Schema::dropIfExists('mahasiswas');
    }
};
