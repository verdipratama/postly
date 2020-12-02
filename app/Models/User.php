<?php

namespace App\Models;

use App\Models\Upload;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'is_admin',
        'first_name',
        'last_name',
        'username',
        'email',
        'password',
    ];

    // Membuat relasi eloquin antara user dan post
    public function uploads()
    {
        return $this->hasMany(Upload::class);
    }
}