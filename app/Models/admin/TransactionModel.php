<?php

namespace App\Models\admin;

use App\Models\auth\AuthModel;
use App\Models\product\ProductPackage;
use Illuminate\Database\Eloquent\Model;

class TransactionModel extends Model
{
    protected $table = 'transactions';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'booking_id',
        'user_id',
        'jumlah_bayar',
        'metode_bayar',
        'bukti_bayar',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(AuthModel::class, 'user_id');
    }

    public function package() {
        return $this->belongsTo(ProductPackage::class, 'package_id');
    }

    public function booking()
    {
        return $this->belongsTo(BookingModel::class, 'booking_id', 'id');
    }
}
