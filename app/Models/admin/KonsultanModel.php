<?php

namespace App\Models\admin;

use App\KonsultStatus;
use Illuminate\Database\Eloquent\Model;

class KonsultanModel extends Model
{
    protected $table = 'konsultan';
    protected $fillable = [
        'nama_lengkap',
        'kontak',
        'alamat_lengkap',
        'catatan',
        'status',
    ];

    protected $casts = [
        'status' => KonsultStatus::class
    ];
}
