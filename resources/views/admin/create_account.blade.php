@extends('layouts.app')

@section('content')

<div class="antialiased sans-serif min-h-screen">
    <div class="min-h-screen p-6 md:ml-64 block">
        <div class="p-8">
            <h1 class="text-2xl font-semibold text-gray-800">Tambah Akun Baru</h1>

            <!-- Menampilkan pesan kesalahan jika ada -->
            @if(session('error'))
                <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded-lg">
                    {{ session('error') }}
                </div>
            @endif

            <form action="{{ route('admin.account_store') }}" method="POST" class="mt-4">
                @csrf

                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Nama</label>
                    <input type="text" name="name" id="name" class="px-4 py-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan Nama" required>
                    @error('name')
                        <div class="text-red-600">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-gray-700">Password</label>
                    <input type="password" name="password" id="password" class="px-4 py-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan Password" required>
                    @error('password')
                        <div class="text-red-600">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="role" class="block text-gray-700">Role</label>
                    <select name="role" id="role" class="px-4 py-2 border border-gray-300 rounded-lg w-full" required>
                        <option value="" disabled selected>Pilih Role</option>
                        <option value="Admin">Admin</option>
                        <option value="Dosen">Dosen</option>
                        <option value="Mahasiswa">Mahasiswa</option>
                    </select>
                    @error('role')
                        <div class="text-red-600">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Tombol Simpan -->
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg">Tambah Akun</button>
            </form>
        </div>
    </div>
</div>

@endsection
