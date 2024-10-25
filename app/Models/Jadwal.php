<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $table = 'jadwal';

    protected $fillable = [
        'semester',
        'kelas',
        'mata_kuliah',
        'id_dosen',
        'dosen_pengampu',
    ];

    // Relasi ke tabel 'users' berdasarkan name sebagai foreign key
    public function dosen()
    {
        return $this->belongsTo(User::class, 'id_dosen', 'name');
    }
}
