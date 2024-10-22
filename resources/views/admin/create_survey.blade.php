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
                                        <button class="py-1 px-3 bg-green-500 hover:bg-green-700 text-white rounded"><ion-icon name="create-outline"></ion-icon>Edit</button>
                                        <button class="py-1 px-3 bg-red-500 hover:bg-red-700 text-white rounded"><ion-icon name="close-outline" class="relative -bottom-[3px]"></ion-icon>Delete</button>
                                    </td>
                                    <td class="border border-gray-300 p-2 flex gap-4 text-white">
                                        <button class="py-1 px-3 bg-green-700 hover:bg-green-900 rounded flex"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 48 48">
                                            <rect width="16" height="9" x="28" y="15" fill="#21a366"></rect>
                                            <path fill="#185c37" d="M44,24H12v16c0,1.105,0.895,2,2,2h28c1.105,0,2-0.895,2-2V24z"></path>
                                            <rect width="16" height="9" x="28" y="24" fill="#107c42"></rect>
                                            <rect width="16" height="9" x="12" y="15" fill="#3fa071"></rect>
                                            <path fill="#33c481" d="M42,6H28v9h16V8C44,6.895,43.105,6,42,6z"></path>
                                            <path fill="#21a366" d="M14,6h14v9H12V8C12,6.895,12.895,6,14,6z"></path>
                                        </svg>
                                        
                                        Excel</button>
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
