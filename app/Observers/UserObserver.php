<?php

namespace App\Observers;

use App\Models\ProfilMahasiswa;
use App\Models\User;

class UserObserver
{
    /**
     * Handle the User "created" event.
     */
    public function created(User $user): void
    {
         // Jika role adalah mahasiswa, buat entri di profil_mahasiswa
         if ($user->role === 'Mahasiswa') {
            ProfilMahasiswa::create([
                'id_user' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'jurusan' => '', // misalnya kosongkan atau tambahkan sesuai kebutuhan
                'prodi' => '',
                'semester' => '1', // atau nilai default yang diinginkan
            ]);
        }
    }

    /**
     * Handle the User "updated" event.
     */
    public function updated(User $user): void
    {
        //
    }

    /**
     * Handle the User "deleted" event.
     */
    public function deleted(User $user): void
    {
        //
    }

    /**
     * Handle the User "restored" event.
     */
    public function restored(User $user): void
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     */
    public function forceDeleted(User $user): void
    {
        //
    }
}
