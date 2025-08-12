<?php

namespace App\Models\admin;

use App\BookingStatus;
use App\Models\auth\AuthModel;
use App\Models\product\ProductPackage;
use Illuminate\Database\Eloquent\Model;

class BookingModel extends Model
{
    protected $table = 'booking';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'user_id',
        'package_id',
        'tanggal_acara',
        'lokasi_acara',
        'catatan',
        'status',
        'bukti_pembayaran'
    ];

    public function user() {
        return $this->belongsTo(AuthModel::class);
    }
    public function package() {
        return $this->belongsTo(ProductPackage::class, 'package_id');
    }
    public function transaction() {
        return $this->hasOne(TransactionModel::class, 'booking_id', 'id');
    }


}
