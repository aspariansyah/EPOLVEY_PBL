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
        
        <!-- Search Form -->
        <form class="mb-5">   
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Search</label>
            <div class="relative">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
                <input type="search" id="default-search" class="block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." required>
                <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
            </div>
        </form>

        <!-- Button DropDown -->
        <div class="bg-gray-100 flex items-start justify-start">
            <div class="relative inline-block text-left">
                <button id="dropdown-button" class="inline-flex justify-center w-full px-[50px] md:px-[85px] py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-blue-500">
                    Survey
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-2 -mr-1" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M6.293 9.293a1 1 0 011.414 0L10 11.586l2.293-2.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>

                <!-- DropDown -->
                <div id="dropdown-menu" class="origin-top-right absolute right-0 mt-2 w-full md:w-60 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden">
                    <div class="py-2 p-2" role="menu" aria-orientation="vertical" aria-labelledby="dropdown-button">
                        <a class="flex rounded-md px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 active:bg-blue-100 cursor-pointer font-poppins font-medium" role="menuitem">
                          Survey Mahasiswa
                        </a>
                        <a class="flex rounded-md px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 active:bg-blue-100 cursor-pointer font-poppins font-medium" role="menuitem">
                          Survey Kepuasan
                        </a>
                        <a class="flex rounded-md px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 active:bg-blue-100 cursor-pointer font-poppins font-medium" role="menuitem">
                          Survey Dosen
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    const dropdownButton = document.getElementById('dropdown-button');
    const dropdownMenu = document.getElementById('dropdown-menu');
    let isDropdownOpen = false;

    function toggleDropdown() {
        isDropdownOpen = !isDropdownOpen;
        dropdownMenu.classList.toggle('hidden', !isDropdownOpen);
    }

    // Toggle the dropdown on button click
    dropdownButton.addEventListener('click', (e) => {
        e.stopPropagation();
        toggleDropdown();
    });

    // Close dropdown when clicking outside
    window.addEventListener('click', (event) => {
        if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
            dropdownMenu.classList.add('hidden');
            isDropdownOpen = false;
        }
    });
</script>
</html>
@endsection
