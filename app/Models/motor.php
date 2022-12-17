<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class motor extends Model
{
    use HasFactory;
    protected $table = 'tbl_motor';
    protected $fillable = [
        'Merk',
        'Tipe',
        'Jenis',
        'Slinder',
        'Warna',
        'Tahun',
        'Hrg_Cash'
    ];
}
