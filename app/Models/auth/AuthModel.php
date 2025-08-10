<?php

namespace App\Models\auth;

use App\Models\admin\BookingModel;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $id
 * @property  string $username
 * @property string $email
 * @property string $password
 * @property string $image
 * @property string $role
 */
class AuthModel extends Authenticatable
{
    protected $table = 'auth';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'nama_lengkap',
        'email',
        'password',
        'image',
        'role',
        'kontak',
        'alamat',
        'about_me'
    ];

    public function userBooking() {
        return $this->hasMany(BookingModel::class);
    }
}
