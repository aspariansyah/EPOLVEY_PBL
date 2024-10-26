<?php

namespace App\Http\Controllers;

use App\Models\ProfilMahasiswa;
use App\Models\Survey;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MahasiswaController extends Controller
{
    public function index()
    {
        return view('mahasiswa.dashboard');
    }
    public function survey()
    {
        $surveys = Survey::where('status', 'berlangsung')->get();
        return view('mahasiswa.survey', compact('surveys'));
    }


    public function profil($id)
    {
        $user = auth()->user(); // Mengambil pengguna yang sedang login
        $mahasiswa = ProfilMahasiswa::where('id_user', $user->id)->firstOrFail(); // Mengambil profil mahasiswa berdasarkan id_user
    
        return view('mahasiswa.profil', compact('mahasiswa'));
    }

    public function edit($id)
    {
        $profil = ProfilMahasiswa::findOrFail($id);
        $mahasiswa = $profil;
        return view('mahasiswa.edit_profil', compact('profil','mahasiswa'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'jurusan' => 'nullable|string|max:255',
            'prodi' => 'nullable|string|max:255',
            'semester' => 'required|in:1,2,3,4,5,6',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // validasi foto
        ]);

        $profil = ProfilMahasiswa::findOrFail($id);
        $user = User::findOrFail($profil->id_user);
        
        // Cek jika ada foto baru yang diunggah
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($profil->foto) {
                Storage::delete('public/' . $profil->foto);
            }

            // Simpan foto baru
            $path = $request->file('foto')->store('images/foto_profil', 'public');

            $profil->foto = str_replace('images/foto_profil/', '', $path);
        }

        // Update informasi lainnya
        $profil->name = $request->name;
        $profil->email = $request->email;
        $profil->jurusan = $request->jurusan;
        $profil->prodi = $request->prodi;
        $profil->semester = $request->semester;
        if ($request->filled('email')) {
            $user->email = $request->email; // Update email pengguna
            $user->email_verified_at = now();
        }

        $profil->save();
        $user->save();


        return redirect()->route('mahasiswa.profil', ['id' => $profil->id])
        ->with('success', 'Profil berhasil diperbarui.');    
    }
}
