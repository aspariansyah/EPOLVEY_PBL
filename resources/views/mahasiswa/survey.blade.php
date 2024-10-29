@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survei Terbaru</title>
    @vite('resources/css/app.css')

    <!-- Poppins Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <!-- Icons -->
    <script type="module" src="https://cdn.jsdelivr.net/npm/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/npm/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50 min-h-screen">
    <div class="ml-[250px] py-8 px-6">
        <div class="max-w-6xl mx-auto">
            <!-- Header Section with decorative elements -->
            <div class="relative text-center mb-12" data-aos="fade-down">
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="w-24 h-24 bg-gradient-to-r from-yellow-200 to-yellow-400 rounded-full blur-xl opacity-20"></div>
                </div>
                <h1 class="relative text-3xl font-bold font-poppins text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600 mb-2 tracking-wide">
                    SURVEY TERBARU
                </h1>
                <div class="w-24 h-1 bg-gradient-to-r from-yellow-400 to-yellow-500 mx-auto rounded-full"></div>
            </div>

            <!-- Survey Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6" data-aos="fade-up">
                @forelse($surveys as $survey)
                    <!-- Survey Card -->
                    <div class="group relative bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden" 
                         data-aos="zoom-in"
                         data-aos-delay="{{ $loop->index * 100 }}">
                        
                        <!-- Decorative Top Bar -->
                        <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-yellow-400 via-yellow-500 to-yellow-400"></div>
                        
                        <!-- Card Content -->
                        <div class="p-6">
                            <!-- Survey Icon -->
                            <div class="mb-4 w-12 h-12 rounded-full bg-yellow-100 flex items-center justify-center mx-auto group-hover:scale-110 transition-transform duration-300">
                                <ion-icon name="document-text" class="text-2xl text-yellow-500"></ion-icon>
                            </div>

                            <!-- Survey Details -->
                            <div class="text-center space-y-2 mb-6">
                                <h3 class="text-lg font-semibold text-gray-800 group-hover:text-blue-600 transition-colors duration-300 font-poppins">
                                    {{ $survey->nama }}
                                </h3>
                                <div class="flex items-center justify-center space-x-2 text-sm">
                                    <span class="bg-blue-50 px-3 py-1 rounded-full font-medium text-blue-600">{{ $survey->jenis }}</span>
                                    <span class="text-gray-400">•</span>
                                    <span class="bg-purple-50 px-3 py-1 rounded-full font-medium text-purple-600">Semester {{ $survey->semester }}</span>
                                </div>
                                <p class="text-gray-400 text-sm font-medium">{{ $survey->tahun }}</p>
                            </div>

                            <!-- View Button -->
                            <a href="{{ route('mahasiswa.survey_detail', $survey->id) }}" 
                               class="block text-center py-2.5 px-4 rounded-lg bg-gradient-to-r from-yellow-400 to-yellow-500 
                                      text-white font-semibold tracking-wide hover:from-yellow-500 hover:to-yellow-600 
                                      transform hover:-translate-y-0.5 transition-all duration-300 shadow-md hover:shadow-lg
                                      font-poppins">
                                <span class="flex items-center justify-center">
                                    Lihat Survey
                                    <ion-icon name="arrow-forward" class="ml-2 text-lg"></ion-icon>
                                </span>
                            </a>
                        </div>
                    </div>
                @empty
                    <!-- Empty State -->
                    <div class="col-span-3 text-center py-12" data-aos="fade-up">
                        <div class="bg-white rounded-xl shadow-md p-8 max-w-md mx-auto">
                            <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <ion-icon name="document-text-outline" class="text-2xl text-yellow-500"></ion-icon>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-800 mb-2 font-poppins">Tidak Ada Survey Aktif</h3>
                            <p class="text-gray-500 font-poppins">Saat ini belum ada survey yang tersedia untuk diisi.</p>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>

    <!-- AOS JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        // Initialize AOS with custom settings
        AOS.init({
            duration: 800,
            easing: 'ease-out-cubic',
            once: true
        });
    </script>
</body>
</html>
@endsection