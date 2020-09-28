<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddWilayahIdToMusimTanamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('musim_tanam', function (Blueprint $table) {
            $table->foreignId('wilayah_id')->nullable()->after('rekomendasi_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('musim_tanam', function (Blueprint $table) {
            $table->dropColumn('wilayah_id');
        });
    }
}
