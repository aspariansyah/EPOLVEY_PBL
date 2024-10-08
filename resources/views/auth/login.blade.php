<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Login Page</title>
</head>
<body class="bg-white overflow-hidden">

    <div class="flex h-screen bg-white overflow-hidden">
        <div class="w-1/2 h-screen lg:grid justify-center items-center bg-[#03A08E] rounded-tr-2xl hidden" >
            <div class="p-8">
                <img src="{{ asset('images/login.png') }}" alt="Illustration" class="h-full w-[550px] object-cover relative bottom-36 lg:relative lg:top-1" data-aos="fade-right" />
            </div>
            <div class="absolute bottom-0 w-1/2" >
                <img src="{{ asset('images/Vector1.png') }}" alt="Vector Illustration" class="w-full" />
            </div>
            <div class="absolute bottom-0 w-full">
                <img src="{{ asset('images/Vector2.png') }}" alt="Vector Illustration" class="w-full" />
            </div>
        </div>
        <div class="w-full lg:w-1/2 flex justify-center items-center bg-white p-6 lg:p-10">
            <div class="w-full max-w-md">
                <h1 class="text-3xl font-bold mb-6 text-gray-900 font-poppins tracking-wide text-center lg:text-left" data-aos="fade-up">LOGIN</h1>

                @if(session('error'))
                    <p class="text-red-500">{{ session('error') }}</p>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf 

                    <div class="mb-4">
                        <input
                            type="text"
                            name="username"
                            placeholder="Username"
                            class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500"
                            value="{{ old('username') }}"
                            data-aos="fade-up" data-aos-delay="100"
                        />
                    </div>

                    <div class="mb-4">
                        <input
                            type="password"
                            name="password"
                            placeholder="Password"
                            class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500"
                            data-aos="fade-up" data-aos-delay="200"
                        />
                    </div>

                    <button type="submit" class="w-full mb-4 p-3 bg-blue-500 text-white rounded-md" data-aos="fade-up" data-aos-delay="300">
                        Login
                    </button>
                </form>

                <div class="flex items-center my-4">
                    <div class="flex-grow border-t border-gray-300"></div>
                    <span class="mx-3 text-gray-500">OR</span>
                    <div class="flex-grow border-t border-gray-300"></div>
                </div>

                <div class="text-center mt-4">
                    <a href="{{ route('password.request') }}" class="text-sm text-blue-500 hover:underline" data-aos="fade-up" data-aos-delay="400">Forgot your password?</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1200, // Durasi animasi dalam milidetik
            once: true, //sekali jalan
        });
    </script>

</body>
</html>
