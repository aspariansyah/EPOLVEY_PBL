<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to E-Survey</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap');
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body>
    <div class="bg-gradient-to-r from-[#910000] to-[#4b0000] min-h-screen font-poppins">
        <div class="flex justify-end items-center p-6">
            <a href="{{ route('login') }}" class="text-black bg-lime-300 px-4 py-2 rounded-full font-bold">
                Log In
            </a>
        </div>

        <div class="container mx-auto flex flex-col md:flex-row justify-center items-center h-full top-10">
            <div class="text-center md:text-left text-white p-6">
                <h1 class="text-6xl font-bold drop-shadow-xl">E-Survey</h1>
                <h2 class="text-4xl mt-2 font-bold drop-shadow-xl">ELECTRICAL ENGINEERING</h2>
                <p class="mt-4 text-lg mb-10">
                    We believe that every input has significance.<br />
                    With this E-Survey, you can make a direct contribution <br />in providing your opinion.
                </p>
                <a href="{{ route('login') }}" class="bg-lime-300 text-black mt-10 px-8 py-4 rounded-md text-xl font-bold drop-shadow-xl">
                    Start Your Survey !
                </a>
            </div>

            <div class="mt-8 md:mt-0 md:ml-16">
                <!-- Gambar yang diimpor menggunakan asset() -->
                <img src="{{ asset('images/homepage.png') }}" alt="Survey Illustration" class="h-auto w-[500px] drop-shadow-2xl" />
            </div>
        </div>

        <div class="absolute bottom-4 left-4 text-white">
            <a href="#" class="text-sm">About Me</a>
        </div>
    </div>
</body>
</html>
