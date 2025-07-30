<?php

namespace App\Models\client;

use Illuminate\Database\Eloquent\Model;

class HeroModel extends Model
{
    protected $table = 'hero';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
      'id',
      'title',
      'subTitle',
      'label'
    ];
}
