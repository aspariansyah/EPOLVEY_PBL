<?php
namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'photo',
        'role', 
    ];

    public function hasRole($role)
    {
        return $this->role === $role;
    }

    // Jika Anda ingin mengonversi kolom tertentu
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    
}
