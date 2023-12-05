<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    use HasFactory;
    protected $table = 'tikets';
    protected $fillable = [
        'nama_pengaju',
        'nim',
        'keluhan',
        'status',
        'ket_tiket',
        'gambar'
    ];

    
    protected $dates = ['created_at', 'updated_at'];
}
