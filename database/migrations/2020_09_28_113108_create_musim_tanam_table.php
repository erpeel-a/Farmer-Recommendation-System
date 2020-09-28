<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusimTanamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musim_tanam', function (Blueprint $table) {
            $table->id();
            $table->integer('nomor_musim');
            $table->string('nama_petani');
            $table->string('nama_musim');
            $table->string('luas_tanah');
            $table->timestamp('tanggal_tanam');
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
        Schema::dropIfExists('musim_tanam');
    }
}
