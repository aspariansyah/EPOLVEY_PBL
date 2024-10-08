<!-- dashboard.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Link Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="flex">
        <!-- Sidebar -->
        <div class="w-64 h-screen bg-white shadow-md">
            <div class="p-6 bg-gradient-to-r from-blue-600 to-purple-600 rounded-br-3xl">
                <!-- Profile Section -->
                <div class="flex items-center">
                    <!-- Profile Image -->
                    <img src="{{ asset('path/to/Mahasiswa.png') }}" alt="User Image" class="w-16 h-16 rounded-full border-2 border-white">
                    <div class="ml-4">
                        <!-- User Name -->
                        <h2 class="text-white text-xl font-semibold">Azizbek Aliyev</h2>
                        <p class="text-purple-200 text-sm">id: 2173948412</p>
                    </div>
                </div>
            </div>

            <!-- Navigation Menu -->
            <nav class="mt-8">
                <ul>
                    <li class="mb-4">
                        <a href="#" class="flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100">
                            <span class="material-icons">dashboard</span>
                            <span class="ml-4">Dashboard</span>
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100">
                            <span class="material-icons">notifications</span>
                            <span class="ml-4">Recent</span>
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100">
                            <span class="material-icons">person</span>
                            <span class="ml-4">Account</span>
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Log Out Button -->
            <div class="mt-auto p-6">
                <a href="#" class="text-gray-900 font-bold hover:underline">Log Out</a>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-6">
            <!-- Content goes here -->
            <h1 class="text-2xl font-bold text-gray-800">Welcome to your Dashboard!</h1>
        </div>
    </div>
</body>
</html>
