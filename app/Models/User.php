<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Sesuaikan dengan nama tabel jika berbeda
    protected $table = 'users';

    // Kolom yang dapat diisi
    protected $fillable = [
        'name', 'email', 'password',
    ];

    // Kolom yang harus disembunyikan untuk array
    protected $hidden = [
        'password', 'remember_token',
    ];

    // Kolom yang harus dipanggil pada array
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
