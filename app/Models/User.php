<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role', 
    ];

    // Jika Anda ingin mengonversi kolom tertentu
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function profilMahasiswa()
    {
        return $this->hasOne(ProfilMahasiswa::class, 'user_id');
    }
    
}
