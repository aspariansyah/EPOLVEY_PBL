<div class="fixed">
<div class="w-64 h-screen bg-white shadow-md">
    <div class="p-6 bg-gradient-to-r from-blue-600 to-purple-600 rounded-br-3xl">
        <div class="flex items-center">
            <img src="{{ asset('images/mysterious.png') }}" alt="User Image" class="w-16 h-16 rounded-full border-white filter invert">
            <div class="ml-4">
                <h2 class="text-white text-xl font-semibold">{{ Auth::user()->name }}</h2>
                <p class="text-purple-200 text-sm">{{ Auth::user()->email }}</p>
            </div>
        </div>
    </div>

    <nav class="mt-8">
        <ul>
            <li class="mb-4">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100">
                    <ion-icon name="easel-outline"></ion-icon>
                    <span class="ml-4">Dashboard Admin</span>
                </a>
            </li>
            <li class="mb-4">
                <a href="" class="flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100">
                    <ion-icon name="create-outline"></ion-icon>
                    <span class="ml-4">Manage Surveys</span>
                </a>
            </li>
            <li class="mb-4">
                <a href="" class="flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100">
                    <ion-icon name="documents-outline"></ion-icon>
                    <span class="ml-4">Survey Results</span>
                </a>
            </li>
            <li class="mb-4">
                <a href="" class="flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100">
                    <ion-icon name="person-outline"></ion-icon>
                    <span class="ml-4">Manage Accounts</span>
                </a>
            </li>
            <div class="flex items-center justify-center">
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                   class="bg-teal-500 text-white px-5 py-2 flex items-center rounded hover:bg-teal-600">
                    Logout
                </a>
            </div>
         
         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
             @csrf
         </form>
         
        </ul>
    </nav>
</div>
</div>
