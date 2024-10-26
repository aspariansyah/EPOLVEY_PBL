@extends('layouts.app')

@section('content')

<div class="antialiased sans-serif min-h-screen">
    <div class="min-h-screen p-6 md:ml-64 block">
        <div class="p-8">
            <h1 class="text-2xl font-semibold text-gray-800">Edit Akun</h1>

            <form action="{{ route('admin.account_update', $profil->id) }}" method="POST" class="mt-4">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Nama</label>
                    <input type="text" name="name" id="name" class="px-4 py-2 border border-gray-300 rounded-lg w-full" value="{{ old('name', $profil->name) }}" required>
                    @error('name')
                        <div class="text-red-600">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-gray-700">Password (kosongkan jika tidak diubah)</label>
                    <input type="password" name="password" id="password" class="px-4 py-2 border border-gray-300 rounded-lg w-full">
                    @error('password')
                        <div class="text-red-600">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="role" class="block text-gray-700">Role</label>
                    <select name="role" id="role" class="px-4 py-2 border border-gray-300 rounded-lg w-full" required>
                        <option value="Admin" {{ old('role', $profil->role) == 'Admin' ? 'selected' : '' }}>Admin</option>
                        <option value="Dosen" {{ old('role', $profil->role) == 'Dosen' ? 'selected' : '' }}>Dosen</option>
                        <option value="Mahasiswa" {{ old('role', $profil->role) == 'Mahasiswa' ? 'selected' : '' }}>Mahasiswa</option>
                    </select>
                    @error('role')
                        <div class="text-red-600">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg">Simpan Perubahan</button>
            </form>
            @if ($errors->any())
    <div class="text-red-600">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

        </div>
    </div>
</div>

@endsection
