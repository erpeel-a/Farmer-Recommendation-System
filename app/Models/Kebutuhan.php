<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kebutuhan extends Model
{
    use HasFactory;
    protected $table = 'kebutuhan_per_wilayah';
    protected $fillable = [
        'wilayah_id', 'satuan_id', 'nama_kebutuhan', 'harga_kebutuhan', 'keterangan'
    ];
    public function satuan()
    {
        return $this->belongsTo(Satuan::class, 'satuan_id', 'id');
    }
}
