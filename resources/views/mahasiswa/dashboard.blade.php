@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite('resources/css/app.css')

    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <script type="module" src="https://cdn.jsdelivr.net/npm/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/npm/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body class="bg-gray-100">
    <div class="flex-1 p-6 mx-60 w-[160vh] h-screen">
        <div>
            <h1 class="text-2xl font-bold text-gray-800 flex justify-center font-poppins" data-aos="fade-up">SURVEY TERBARU</h1>

            <!-- Dynamic Slate background box with 3 grid columns -->
            <div class=" mt-6 p-6 grid grid-cols-3 gap-4" data-aos="fade-up">
                <!-- Grid item for each survey -->
                <div class="bg-white p-4 shadow-md rounded-lg h-44 text-center grid items-end" data-aos="zoom-in">
                    <p class="text-gray-700 font-semibold">Survey 1</p>
                    <p class="text-gray-500">Description</p>
                    <a href="" class="text-slate-800 font-bold font-poppins bg-yellow-400 rounded-md py-1 tracking-wide hover:bg-yellow-500 hover:text-white">View</a>
                </div>
                <!-- You can add more survey items as needed -->
            </div>
        </div>
    </div>

    <!-- AOS JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init();
    </script>
</body>
</html>
@endsection
