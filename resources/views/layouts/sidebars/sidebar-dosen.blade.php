<div class="w-64 h-screen bg-white shadow-md">
    <div class="p-6 bg-gradient-to-r from-green-600 to-teal-600 rounded-br-3xl">
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
                <a href="" class="flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100">
                    <ion-icon name="easel-outline"></ion-icon>
                    <span class="ml-4">Dashboard Dosen</span>
                </a>
            </li>
            <li class="mb-4">
                <a href="" class="flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100">
                    <ion-icon name="documents-outline"></ion-icon>
                    <span class="ml-4">Survey Results</span>
                </a>
            </li>
        </ul>
    </nav>
    <a href="{{ route('logout') }}"
    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
     Logout
 </a>
 
 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
     @csrf
 </form>
</div>
