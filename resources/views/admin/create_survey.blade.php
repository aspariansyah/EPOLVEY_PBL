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
            <div class="overflow-x-auto max-w-full">
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
                                        <button class="py-1 px-3 bg-blue-500 text-white rounded w-full md:w-auto">Tambah Pertanyaan</button>
                                    </a>
                                </td>
                                <td class="border border-gray-300 p-2 space-y-2 md:space-y-0 md:space-x-2">
                                    <a href="{{ route('admin.edit_survey', $survey->id) }}">
                                        <button class="py-1 px-3 bg-green-500 text-white rounded w-full md:w-auto">
                                            <ion-icon name="create-outline"></ion-icon> Edit
                                        </button>
                                    </a>
                                    <form action="{{ route('admin.delete_survey', $survey->id) }}" method="POST" style="display:inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="py-1 px-3 bg-red-500 text-white rounded w-full md:w-auto">
                                            <ion-icon name="close-outline"></ion-icon> Delete
                                        </button>
                                    </form>
                                </td>
                                <td class="border border-gray-300 p-2 flex flex-col md:flex-row gap-2">
                                    <button class="py-1 px-3 bg-green-700 hover:bg-green-900 rounded flex items-center justify-center md:w-auto w-full text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 48 48" class="mr-2">
                                            <rect width="16" height="9" x="28" y="15" fill="#21a366"></rect>
                                            <path fill="#185c37" d="M44,24H12v16c0,1.105,0.895,2,2,2h28c1.105,0,2-0.895,2-2V24z"></path>
                                            <rect width="16" height="9" x="28" y="24" fill="#107c42"></rect>
                                            <rect width="16" height="9" x="12" y="15" fill="#3fa071"></rect>
                                            <path fill="#33c481" d="M42,6H28v9h16V8C44,6.895,43.105,6,42,6z"></path>
                                            <path fill="#21a366" d="M14,6h14v9H12V8C12,6.895,12.895,6,14,6z"></path>
                                        </svg>
                                        Excel
                                    </button>
                                    <button class="py-1 px-3 bg-gray-200 rounded w-full md:w-auto">Email</button>
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
