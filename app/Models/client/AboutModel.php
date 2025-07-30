<?php

namespace App\Models\client;

use Illuminate\Database\Eloquent\Model;

class AboutModel extends Model
{
    protected $table = 'about';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'title',
        'SubTitle',
        'alamat',
        'Kontak',
        'image_1',
        'image_2'
    ];
}
