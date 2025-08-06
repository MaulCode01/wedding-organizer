<?php

namespace App\Models\admin;

use App\BookingStatus;
use Illuminate\Database\Eloquent\Model;

class BookingModel extends Model
{
    protected $table = 'booking';
    protected $fillable = [
        'nama_lengkap',
        'kontak',
        'lokasi_acara',
        'tanggal_acara',
        'kategori',
        'catatan',
        'status',
    ];

}
