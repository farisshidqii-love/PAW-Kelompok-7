<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    protected $table = 'obat'; 
    
    const UPDATED_AT = null; 

    protected $fillable = [
        'id_obat',
        'nama_obat',
        'kategori_obat',
        'stok_obat',
        'pabrik_pembuat',
    ];
}