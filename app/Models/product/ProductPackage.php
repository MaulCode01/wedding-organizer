<?php

namespace App\Models\product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\product\ProdukContentModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductPackage extends Model
{
    use HasFactory;

    protected $table = 'product_packages';
    protected $fillable = [
    'content_id',
    'image_package',
    'nama_paket',
    'package_key',
    'harga',
    'fitur_1',
    'fitur_2',
    'description_content',

];


    protected $casts = [
        'fitur_1' => 'array',
        'fitur_2' => 'array',
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


    public static function topSelling($limit = 3)
    {
        return self::select(
                'product_packages.*',
                DB::raw('COUNT(booking.id) as total_terjual'),
                DB::raw('COUNT(booking.id) * product_packages.harga as pendapatan')
            )
            ->join('booking', 'booking.package_id', '=', 'product_packages.id')
            ->groupBy('product_packages.id')
            ->orderByDesc('total_terjual')
            ->limit($limit)
            ->get();
    }
}
