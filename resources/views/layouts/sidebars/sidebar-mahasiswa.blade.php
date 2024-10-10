<div class="w-64 h-screen bg-white shadow-md">
    <div class="p-6 bg-gradient-to-r from-yellow-500 to-orange-500 rounded-br-3xl">
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
                <a href="{{ route('mahasiswa.dashboard') }}" class="flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100">
                    <ion-icon name="easel-outline"></ion-icon>
                    <span class="ml-4">Dashboard Mahasiswa</span>
                </a>
            </li>
            <li class="mb-4">
                <a href="{{ route('mahasiswa.surveys') }}" class="flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100">
                    <ion-icon name="create-outline"></ion-icon>
                    <span class="ml-4">View Surveys</span>
                </a>
            </li>
        </ul>
    </nav>
</div>
