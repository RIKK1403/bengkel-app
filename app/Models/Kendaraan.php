<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kendaraan extends Model
{
    use HasFactory;
    protected $table = 'kendaraan';

    protected $fillable = [
        'nama',
        'nohp',
        'plat_nomor',
        'keluhan',
        'tanggal',
        'jam',
    ];
}
