<?php

namespace App\Models\product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\product\ProductPackage;

class ProdukContentModel extends Model
{
    use HasFactory;

    protected $table = 'product_content';
    protected $fillable = [
        'kategori',
        'judul_konten',
        'deskripsi_konten',
        'fitur',
        'image_konten',
    ];

    protected $casts = [
        'fitur' => 'array',
    ];

    public function packages()
    {
        return $this->hasMany(ProductPackage::class, 'content_id');
    }
}

