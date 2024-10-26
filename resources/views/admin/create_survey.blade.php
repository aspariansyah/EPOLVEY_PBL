@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Survey</title>
    @vite('resources/css/app.css')
    <script type="module" src="https://cdn.jsdelivr.net/npm/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/npm/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body class="bg-gray-100">
    <div class="flex flex-col h-screen">

        <!-- Main content -->
        <div class="flex-1 p-4 md:p-6 md:ml-64">
            <div class="mb-4">
                <a href="{{ route('admin.add_survey') }}">
                    <button class="py-2 px-4 bg-green-500 text-white rounded w-full md:w-auto">
                        Create Survey
                    </button>
                </a>
            </div>

            <div class="">
                <div class="overflow-x-auto">
                    <table class="min-w-full border-collapse border border-gray-300">
                        <thead>
                            <tr>
                                <th class="border border-gray-300 p-2 text-left">No</th>
                                <th class="border border-gray-300 p-2 text-left">Judul Survey</th>
                                <th class="border border-gray-300 p-2 text-left">Jml. Respon</th>
                                <th class="border border-gray-300 p-2 text-left">Last Submit</th>
                                <th class="border border-gray-300 p-2 text-left">View</th>
                                <th class="border border-gray-300 p-2 text-left">Action</th>
                                <th class="border border-gray-300 p-2 text-left">Ekspor</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($surveys as $survey)
                                <tr>
                                    <td class="border border-gray-300 p-2">{{ $loop->iteration }}</td>
                                    <td class="border border-gray-300 p-2">{{ $survey->nama }}</td>
                                    <td class="border border-gray-300 p-2">{{ $survey->responses_count ?? 0 }}</td>
                                    <td class="border border-gray-300 p-2">{{ $survey->updated_at->format('d M Y') }}</td>
                                    <td class="border border-gray-300 p-2">
                                        <a href="{{ route('admin.pertanyaan', $survey->id) }}">
                                            <button class="py-1 px-3 bg-blue-500 text-white rounded">Tambah Pertanyaan
                                            </button>
                                        </a>
                                    </td>
                                    <td class="border border-gray-300 p-2">
                                        <a href="{{ route('admin.edit_survey', $survey->id) }}">
                                            <button class="py-1 px-3 bg-green-500 text-white rounded">
                                                <ion-icon name="create-outline"></ion-icon>Edit
                                            </button>
                                        </a>
                                        <form action="{{ route('admin.delete_survey', $survey->id) }}" method="POST" style="display:inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="py-1 px-3 bg-red-500 text-white rounded">
                                                <ion-icon name="close-outline"></ion-icon>Delete
                                            </button>
                                        </form>
                                    </td>
                                    <td class="border border-gray-300 p-2">
                                        <button class="py-1 px-3 bg-gray-200 rounded">Excel</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
           
        </div>
    </div>
</body>
</html>
@endsection
