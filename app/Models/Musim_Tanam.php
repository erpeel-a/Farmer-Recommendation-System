<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Musim_Tanam extends Model
{
    use HasFactory;
    protected $table = 'musim_tanam';
    protected $fillable = [
        'rekomendasi_id', 'wilayah_id', 'nomor_musim', 'nama_petani', 'nama_musim', 'luas_tanah', 'tanggal_tanam'
    ];
}
