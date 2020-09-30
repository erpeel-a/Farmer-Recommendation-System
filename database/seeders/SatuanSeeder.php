<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Satuan::create([
            'nama_satuan' => 'Buah'
        ]);
        \App\Models\Satuan::create([
            'nama_satuan' => 'Kg'
        ]);
        \App\Models\Satuan::create([
            'nama_satuan' => 'Meter'
        ]);
        \App\Models\Satuan::create([
            'nama_satuan' => 'Ton'
        ]);
        \App\Models\Satuan::create([
            'nama_satuan' => 'Karung'
        ]);
        \App\Models\Satuan::create([
            'nama_satuan' => 'Centimeter'
        ]);
    }
}
