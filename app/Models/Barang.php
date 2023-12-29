<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;

    protected $fillable = [
        'namabarang', 'hargabarang', 'stokbarang', 'kategoribarang', 'foto'
    ];
}
