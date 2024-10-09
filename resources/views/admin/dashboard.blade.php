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
    <div class="flex">

        <div class="w-64 h-screen bg-white shadow-md">
            <div class="p-6 bg-gradient-to-r from-blue-600 to-purple-600 rounded-br-3xl">
                <div class="flex items-center">
                    <img src="{{ asset('images/mysterious.png') }}" alt="User Image" class="w-16 h-16 rounded-full border-2 border-white">
                    <div class="ml-4">
                        <h2 class="text-white text-xl font-semibold">{{ Auth::user()->name }}</h2>
                        <p class="text-purple-200 text-sm">{{ Auth::user()->email }}</p>
                    </div>
                </div>
            </div>

            <nav class="mt-8">
                <ul>
                    <li class="mb-4">
                        <a href="#" class="flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100">
                            <span class="material-icons"><ion-icon name="easel-outline"></ion-icon></span>
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
            <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
             {{ __('Logout') }}
         </a>

         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
             @csrf
         </form>
        </div>

        <div class="flex-1 p-6">
            <h1 class="text-2xl font-bold text-gray-800">Welcome to your Dashboard!</h1>
        </div>
    </div>
</body>
</html>
