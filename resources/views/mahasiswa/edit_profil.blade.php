@extends('layouts.app')

@section('content')
<div class="antialiased sans-serif min-h-screen bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50">
    <div class="min-h-screen p-6 md:ml-64 flex items-center justify-center">
        <div class="max-w-md w-full bg-white rounded-2xl shadow-lg overflow-hidden md:max-w-2xl border border-gray-200">
            <div class="p-8">
                <h2 class="text-center text-3xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600">Edit Profil Mahasiswa</h2>
                <form action="{{ route('mahasiswa.update_profil', $mahasiswa->id) }}" method="POST" enctype="multipart/form-data" class="mt-8 space-y-6">
                    @csrf
                    @method('PUT')

                    <!-- NIM Field -->
                    <div class="mb-6">
                        <label for="name" class="block text-sm font-medium text-gray-700">NIM</label>
                        <input id="name" name="name" type="text" value="{{ old('name', $mahasiswa->name) }}" required readonly class="appearance-none rounded-lg relative block w-full px-4 py-3 border border-gray-300 bg-gray-100 text-gray-800 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="Masukkan NIM">
                    </div>

                    <!-- Email Field -->
                    <div class="mb-6">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input id="email" name="email" type="email" value="{{ old('email', $mahasiswa->email) }}" required class="appearance-none rounded-lg relative block w-full px-4 py-3 border border-gray-300 bg-gray-50 text-gray-800 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="Masukkan email Anda">
                        @error('email')
                            <span class="text-red-600 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Jurusan Field -->
                    <div class="mb-6">
                        <label for="jurusan" class="block text-sm font-medium text-gray-700">Jurusan</label>
                        <input id="jurusan" name="jurusan" type="text" value="Teknik Elektro" required readonly class="appearance-none rounded-lg relative block w-full px-4 py-3 border border-gray-300 bg-gray-100 text-gray-800 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="Enter your major">
                    </div>

                    <!-- Program Studi Field -->
                    <div class="mb-6">
                        <label for="prodi" class="block text-sm font-medium text-gray-700">Program Studi</label>
                        <input id="prodi" name="prodi" type="text" value="Teknik Informatika" required readonly class="appearance-none rounded-lg relative block w-full px-4 py-3 border border-gray-300 bg-gray-100 text-gray-800 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="Enter your major">
                    </div>

                    <!-- Semester Dropdown -->
                    <div class="mb-6">
                        <label for="semester" class="block text-sm font-medium text-gray-700">Semester</label>
                        <select id="semester" name="semester" required class="block w-full pl-3 pr-10 py-3 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-lg">
                            @for ($i = 1; $i <= 8; $i++)
                                <option value="{{ $i }}" {{ $mahasiswa->semester == $i ? 'selected' : '' }}>{{ $i }}</option>
                            @endfor
                        </select>
                    </div>

                    <!-- Foto Profil Field -->
                    <div class="mb-6">
                        <label for="foto" class="block text-sm font-medium text-gray-700">Upload Foto Profil</label>
                        <input id="foto" name="foto" type="file" accept="image/*" onchange="validateFile()" class="appearance-none rounded-lg relative block w-full px-4 py-3 border border-gray-300 bg-gray-50 text-gray-800 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        <script>
                            function validateFile() {
                                const input = document.getElementById('foto');
                                const file = input.files[0];
                                if (file.size > 2048000) { // 2MB
                                    alert('File terlalu besar! Maksimal 2MB.');
                                    input.value = '';
                                }
                            }
                        </script>
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-lg text-white bg-gradient-to-r from-blue-500 to-indigo-500 hover:from-blue-600 hover:to-indigo-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 shadow-lg hover:shadow-xl transition-all duration-200">
                            Update Profil
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
