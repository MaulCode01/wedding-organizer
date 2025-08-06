<?php

namespace App\Models\product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\product\ProdukContentModel;

class ProductPackage extends Model
{
    use HasFactory;

    protected $table = 'product_packages';
    protected $fillable = [
        'content_id',
        'nama_paket',
        'harga',
        'fitur',
    ];

    protected $casts = [
        'fitur' => 'array',
    ];

    public function content()
    {
        return $this->belongsTo(ProdukContentModel::class, 'content_id');
    }
}
