<?php

namespace App\Models\product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\product\ProdukContentModel;
use Illuminate\Support\Str;

class ProductPackage extends Model
{
    use HasFactory;

    protected $table = 'product_packages';
    protected $fillable = [
    'content_id',
    'nama_paket',
    'package_key',
    'harga',
    'fitur',
    'image_package',
    'description_content',
    'fitur_detail'
];


    protected $casts = [
        'fitur' => 'array',
    ];

    public function content()
    {
        return $this->belongsTo(ProdukContentModel::class, 'content_id');
    }

    protected static function booted()
{
    static::creating(function ($package) {
        if (empty($package->package_key)) {
            $kategori = ProdukContentModel::where('id', $package->content_id)->value('kategori');
            $package->package_key = Str::slug($kategori) . '-' . uniqid();
        }
    });
}
}
