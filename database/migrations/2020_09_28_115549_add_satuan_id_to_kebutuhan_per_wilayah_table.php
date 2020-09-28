<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSatuanIdToKebutuhanPerWilayahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kebutuhan_per_wilayah', function (Blueprint $table) {
            $table->foreignId('satuan_id')->nullable()->after('wilayah_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kebutuhan_per_wilayah', function (Blueprint $table) {
            $table->dropColumn('satuan_id');
        });
    }
}
