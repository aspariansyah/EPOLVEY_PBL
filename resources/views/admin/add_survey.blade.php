@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Survey</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <div class="flex justify-center items-center h-screen">
        <div class="bg-white p-6 rounded shadow-md w-1/2">
            <h2 class="text-2xl mb-4">Add New Survey</h2>

            <!-- Form for creating new survey -->
            <form action="{{ route('admin.store_survey') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="nama" class="block text-gray-700 font-bold mb-2">Judul Survey:</label>
                    <input type="text" id="nama" name="nama" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>

                <div class="mb-4">
                    <label for="jenis" class="block text-gray-700 font-bold mb-2">Jenis Survey:</label>
                    <select id="jenis" name="jenis" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        <option value="IKAD">IKAD</option>
                        <option value="Survey kepuasan">Survey Kepuasan</option>
                        <option value="Jenis baru">Jenis Baru</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="semester" class="block text-gray-700 font-bold mb-2">Semester:</label>
                    <select id="semester" name="semester" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="tahun" class="block text-gray-700 font-bold mb-2">Tahun:</label>
                    <input type="number" id="tahun" name="tahun" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>

                <div class="mb-4">
                    <label for="status" class="block text-gray-700 font-bold mb-2">Status:</label>
                    <select id="status" name="status" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        <option value="berlangsung">Berlangsung</option>
                        <option value="selesai">Selesai</option>
                    </select>
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="py-2 px-4 bg-blue-500 text-white rounded">Add Survey</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
@endsection
