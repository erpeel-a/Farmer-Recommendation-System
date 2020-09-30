<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WilayahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Wilayah::create([
            'nama_wilayah' => 'Mojogedang'
        ]);
        \App\Models\Wilayah::create([
            'nama_wilayah' => 'Karanganyar'
        ]);
        \App\Models\Wilayah::create([
            'nama_wilayah' => 'Tasikmadu'
        ]);
        \App\Models\Wilayah::create([
            'nama_wilayah' => 'Matesih'
        ]);
        \App\Models\Wilayah::create([
            'nama_wilayah' => 'Karangpandan'
        ]);
        \App\Models\Wilayah::create([
            'nama_wilayah' => 'Ngargoyoso'
        ]);
        \App\Models\Wilayah::create([
            'nama_wilayah' => 'Kerjo'
        ]);
    }
}
