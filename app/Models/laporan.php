<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laporan extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul',
        'pelapor',
        'terlapor',
        'tanggal',
        'tempat',
        'isi',
        'bukti',
        'user_id',
    ];
}
