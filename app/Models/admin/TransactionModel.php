<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Model;

class TransactionModel extends Model
{
    protected $table = 'trasaction';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [

    ];
}
