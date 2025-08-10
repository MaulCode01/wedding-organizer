<?php

namespace App\Models\client;

use Illuminate\Database\Eloquent\Model;

class UserBookingModel extends Model
{
    protected $table = 'user_booking';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'user_id',
        'product_package_id',
        'tanggal_acara',
        'catatan',
        'status',
        'bukti_pembayaran'
    ];

}
