<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login Page</title>
</head>
<body>
    <div class="flex h-screen bg-white overflow-hidden">
        <div class="w-1/2 h-screen grid justify-center items-center bg-[#03A08E] rounded-tr-2xl">
            <div class="p-8">
                <img src="{{ asset('images/login.png') }}" alt="Illustration" class="h-full w-[550px] object-cover relative bottom-36" />
            </div>
            <div class="absolute bottom-0 w-1/2">
                <img src="{{ asset('images/Vector1.png') }}" alt="Vector Illustration" class="w-full" />
            </div>
            <div class="absolute bottom-0 w-full">
                <img src="{{ asset('images/Vector2.png') }}" alt="Vector Illustration" class="w-full" />
            </div>
        </div>

        <div class="w-1/2 flex justify-center items-center bg-white">
            <div class="w-full max-w-md p-8">
                <h1 class="text-3xl font-bold mb-6 text-gray-900 font-poppins tracking-wide">LOGIN</h1>

                @if($errors->any())
                    <div class="text-red-500 mb-4">
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf 

                    <div class="mb-4">
                        <label for="username" class="sr-only">Username or Email</label>
                        <input
                            type="text"
                            id="username"
                            name="name" 
                            placeholder="Username or Email"
                            class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500"
                            value="{{ old('name') }}"
                        />
                    </div>

                    <div class="mb-4">
                        <label for="password" class="sr-only">Password</label>
                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Password"
                            class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500"
                        />
                    </div>

                    <button type="submit" class="w-full mb-4 p-3 bg-blue-500 text-white rounded-md">
                        Login
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
