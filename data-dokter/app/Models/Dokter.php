<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $table = 'data_dokter';
    protected $primaryKey = 'sip';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'sip',
        'nama',
        'spesialis',
        'kontak',
    ];
}