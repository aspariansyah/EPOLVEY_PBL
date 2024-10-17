@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite('resources/css/app.css')
    <script type="module" src="https://cdn.jsdelivr.net/npm/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/npm/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body class="bg-gray-100">
    <div class="flex flex-col h-screen">

        <div class="flex-1 p-6 md:ml-64">
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
                                <tr>
                                    <td class="border border-gray-300 p-2"></td>
                                    <td class="border border-gray-300 p-2"></td>
                                    <td class="border border-gray-300 p-2"></td>
                                    <td class="border border-gray-300 p-2"></td>
                                    <td class="border border-gray-300 p-2">
                                        <button class="py-1 px-3 bg-blue-500 text-white rounded">Resume</button>
                                        <button class="py-1 px-3 bg-blue-500 text-white rounded">Individual</button>
                                    </td>
                                    <td class="border border-gray-300 p-2">
                                        <button class="py-1 px-3 bg-green-500 text-white rounded"><ion-icon name="create-outline"></ion-icon>Edit</button>
                                        <button class="py-1 px-3 bg-red-500 text-white rounded"><ion-icon name="close-outline" class="relative -bottom-[3px]"></ion-icon>Delete</button>
                                    </td>
                                    <td class="border border-gray-300 p-2">
                                        <button class="py-1 px-3 bg-gray-200 rounded">Excel</button>
                                        <button class="py-1 px-3 bg-gray-200 rounded">Email</button>
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection
