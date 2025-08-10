<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Model;

class TransactionModel extends Model
{
    protected $table = 'trasaction';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'booking_id',
        'jumlah_bayar',
        'metode_bayar',
        'bukti_bayar',
        'status',
    ];

    public function booking() {
        return $this->belongsTo(BookingModel::class);
    }
}
