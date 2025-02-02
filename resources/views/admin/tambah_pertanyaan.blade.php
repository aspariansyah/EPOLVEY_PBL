@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pertanyaan</title>
    @vite('resources/css/app.css')
    <script type="module" src="https://cdn.jsdelivr.net/npm/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/npm/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body class="bg-gray-100">
    <div class="flex flex-col h-screen">
        <div class="flex-1 p-6 md:ml-64">
            <h2 class="text-2xl font-bold mb-6">Tambah Pertanyaan untuk Survey: {{ $survey->nama }}</h2>

            <form action="{{ route('admin.store_pertanyaan', $survey->id) }}" method="POST">
                @csrf
                <div id="pertanyaan-container">
                    <!-- Pertanyaan Dinamis akan ditambahkan di sini -->
                    <div class="mb-4">
                        <input type="text" name="pertanyaan[]" placeholder="Pertanyaan" class="w-full p-2 border rounded mb-2" required>
                        <select name="jenis[]" class="w-full p-2 border rounded" required>
                            <option value="essay">Essay</option>
                            <option value="pilihan">Pilihan</option>
                        </select>
                        <button type="button" class="remove-pertanyaan py-1 px-2 bg-red-500 text-white rounded mt-2">
                            <ion-icon name="close-outline"></ion-icon> Hapus
                        </button>
                    </div>
                </div>

                <button type="button" id="add-pertanyaan" class="py-2 px-4 bg-blue-500 text-white rounded mb-4">Tambah Pertanyaan</button>

                <button type="submit" class="py-2 px-4 bg-green-500 text-white rounded">Simpan Pertanyaan</button>
            </form>
            <h3 class="text-xl font-bold mt-6">Daftar Pertanyaan yang Sudah Ada:</h3>
            <div class="overflow-x-auto mt-4">
                <table class="min-w-full border-collapse border border-gray-300">
                    <thead>
                        <tr>
                            <th class="border border-gray-300 p-2 text-left">No</th>
                            <th class="border border-gray-300 p-2 text-left">Pertanyaan</th>
                            <th class="border border-gray-300 p-2 text-left">Jenis</th>
                            <th class="border border-gray-300 p-2 text-left">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($survey->questions->isEmpty())
                            <tr>
                                <td colspan="4" class="border border-gray-300 p-2 text-center">Tidak ada pertanyaan yang tersedia.</td>
                            </tr>
                        @else
                            @foreach($survey->questions as $pertanyaan)
                                <tr>
                                    <td class="border border-gray-300 p-2">{{ $loop->iteration }}</td>
                                    <td class="border border-gray-300 p-2">{{ $pertanyaan->pertanyaan }}</td>
                                    <td class="border border-gray-300 p-2">{{ $pertanyaan->jenis }}</td>
                                    <td class="border border-gray-300 p-2">
                                        <a href="{{ route('admin.edit_pertanyaan', $pertanyaan->id) }}" class="py-1 px-2 bg-green-500 text-white rounded">Edit</a>
                                        <form action="{{ route('admin.delete_pertanyaan', $pertanyaan->id) }}" method="POST" style="display:inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="py-1 px-2 bg-red-500 text-white rounded">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('add-pertanyaan').addEventListener('click', function() {
            var container = document.getElementById('pertanyaan-container');
            var newQuestion = document.createElement('div');
            newQuestion.classList.add('mb-4');
            newQuestion.innerHTML = `
                <input type="text" name="pertanyaan[]" placeholder="Pertanyaan" class="w-full p-2 border rounded mb-2" required>
                <select name="jenis[]" class="w-full p-2 border rounded" required>
                    <option value="essay">Essay</option>
                    <option value="pilihan">Pilihan</option>
                </select>
                <button type="button" class="remove-pertanyaan py-1 px-2 bg-red-500 text-white rounded mt-2">
                    <ion-icon name="close-outline"></ion-icon> Hapus
                </button>
            `;
            container.appendChild(newQuestion);
        });

        // Event delegation to handle remove buttons for dynamically added questions
        document.getElementById('pertanyaan-container').addEventListener('click', function(e) {
            if (e.target.classList.contains('remove-pertanyaan')) {
                e.target.parentElement.remove(); // Remove the parent div
            }
        });
    </script>
</body>
</html>
@endsection
