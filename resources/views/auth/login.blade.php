<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script type="module" src="https://cdn.jsdelivr.net/npm/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/npm/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


    <title>Login Page</title>
</head>
<body class="bg-white overflow-hidden">

    <div class="flex h-screen bg-white overflow-hidden">
        <div class="w-1/2 h-screen lg:grid justify-center items-center bg-[#03A08E] rounded-tr-2xl hidden" >
            <div class="p-8">
                <img src="{{ asset('images/login.png') }}" alt="Illustration" class="h-full w-[550px] object-cover relative bottom-36 lg:relative " data-aos="fade-right" />
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

                @if($errors->any())
                    <div class="text-red-500 mb-4" data-aos="fade-up">
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf 

                    <div class="mb-4">
                        <label for="username" class="sr-only">Username or Email</label>
                        <input type="text" id="username" name="name" placeholder="Username or Email" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500" data-aos="fade-up" value="{{ old('name') }}" />
                    </div>

                    <div class="mb-4 relative">
                        <label for="password" class="sr-only">Password</label>
                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Password"
                            class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500"
                            data-aos="fade-up" data-aos-delay="200"
                        />
                        <span id="togglePassword" class="absolute inset-y-0 right-4 flex items-center cursor-pointer" data-aos="fade-up">
                            <ion-icon name="eye-outline" id="eyeIcon"></ion-icon>
                        </span>
                    </div>
                    
                    

                    <button type="submit" class="w-full mb-4 p-3 bg-blue-500 text-white rounded-md" data-aos="fade-up" data-aos-delay="300">
                        Login
                    </button>
                </form>
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
   <script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');
    const eyeIcon = document.querySelector('#eyeIcon');

    togglePassword.addEventListener('click', function () {
        
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);

        const newIcon = type === 'password' ? 'eye-outline' : 'eye-off-outline';
        eyeIcon.setAttribute('name', newIcon);
    });
</script>

    
</body>
</html>
