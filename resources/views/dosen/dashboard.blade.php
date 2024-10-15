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

    <div class="flex-1 p-6 mx-4 md:mx-10 lg:mx-60 w-full max-w-screen-xl h-screen">
        <!-- Dashboard Content -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Total Survey Box -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-bold mb-4">Total Survey</h2>
                <div class="text-4xl font-extrabold text-blue-600">12</div>
            </div>

            <!-- Percentage Completed Survey Box -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-bold mb-4">Percentage of Completed Surveys</h2>
                <div class="text-4xl font-extrabold text-green-600">85%</div>
            </div>

            <!-- Number of Respondents Box -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-bold mb-4">Number of Respondents</h2>
                <div class="text-4xl font-extrabold text-yellow-600">320</div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection
