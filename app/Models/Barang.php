<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barang';

    public function satuan()
    {
        return $this->belongsTo(Satuan::class, 'satuan_barang', 'kode_satuan');
    }
}
