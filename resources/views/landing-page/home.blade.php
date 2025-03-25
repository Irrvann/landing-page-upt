<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPT-KOMP | IWIMA</title>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        @import url('https://fonts.googleapis.com/css2?family=VT323&display=swap');

        body {
            font-family: 'VT323', monospace;
        }

        .pixel-button {
            position: relative;
        }

        .pixel-button::before {
            content: '';
            position: absolute;
            top: -4px;
            left: -4px;
            right: -4px;
            bottom: -4px;
            background-color: #FF9BF5;
            z-index: -1;
        }

        .pixel-corner {
            position: absolute;
            width: 8px;
            height: 8px;
            background-color: #FFFF00;
        }

        .top-left {
            top: -4px;
            left: -4px;
        }

        .top-right {
            top: -4px;
            right: -4px;
        }

        .bottom-left {
            bottom: -4px;
            left: -4px;
        }

        .bottom-right {
            bottom: -4px;
            right: -4px;
        }

        .pixel-box {
            width: 16px;
            height: 16px;
            position: absolute;
            z-index: 1;
        }
    </style>
</head>

<body class="bg-indigo-900 min-h-screen relative overflow-x-hidden">


    <!-- navigasi -->
    <nav class="flex justify-between items-center px-8 py-4 border-b border-indigo-800 relative z-10">
        <div class="flex items-center">
            <div class="text-white text-2xl font-bold flex items-center">
                <div class="mr-2 text-yellow-400">◆</div>
                UPT Komputer
            </div>
        </div>
        <div class="flex space-x-8 text-white text-xl">
            <a href="#" class="hover:text-yellow-400">Home</a>
            <a href="#" class="hover:text-yellow-400">About</a>
            <a href="#" class="hover:text-yellow-400">Services</a>
            <a href="#" class="hover:text-yellow-400">gallery</a>
        </div>
        <div class="flex">
            <a href="#"
                class="bg-white px-4 py-2 text-indigo-700 font-semibold hover:bg-indigo-100 transition duration-300">
                Contact
            </a>
        </div>

        <!-- Nav pixel elements -->
        <div class="pixel-box bg-red-500 top-6 left-1/4"></div>
        <div class="pixel-box bg-yellow-400 top-12 left-1/3"></div>
        <div class="pixel-box bg-green-400 top-4 right-1/4"></div>
    </nav>
    <!-- navigasi -->


    <!-- home -->
    <main class="container mx-auto px-4 py-12 relative">
        <div class="flex flex-col items-center justify-center">

            <!-- Original left pixels grid -->
            <div class="grid grid-cols-3 gap-0 absolute left-20 top-40 z-10">
                <div class="w-16 h-16 bg-teal-600 relative overflow-hidden">
                    <div class="w-full h-full bg-teal-600">
                        <div class="absolute top-3 left-3 w-10 h-10 bg-red-300 rounded-full"></div>

                    </div>
                </div>
                <div class="w-16 h-16 opacity-0"></div>
                <div class="w-16 h-16 opacity-0"></div>
                <div class="w-16 h-16 opacity-0"></div>
                <div class="w-16 h-16 bg-teal-600 relative overflow-hidden">
                    <div class="absolute top-3 left-3 w-10 h-10 bg-red-300 rounded-full"></div>
                    <div class="absolute top-5 left-5 w-6 h-4 bg-red-600"></div>
                </div>
                <div class="w-16 h-16 opacity-0"></div>
                <div class="w-16 h-16 bg-teal-600 relative overflow-hidden">
                    <div class="absolute top-3 left-3 w-10 h-10 bg-red-300 rounded-full"></div>
                    <div class="absolute top-5 left-5 w-6 h-4 bg-red-600"></div>
                </div>
                <div class="w-16 h-16 bg-red-400 relative overflow-hidden">
                    <div class="absolute top-3 left-3 w-10 h-10 bg-red-300 rounded-full"></div>
                </div>
                <div class="w-16 h-16 bg-red-600 relative overflow-hidden">
                    <div class="absolute top-3 left-3 w-10 h-10 bg-red-300 rounded-full"></div>
                </div>
                <div class="w-16 h-16 opacity-0"></div>
                <div class="w-16 h-16 opacity-0"></div>
                <div class="w-16 h-16 bg-purple-400 relative overflow-hidden">
                    <div class="absolute top-3 left-3 w-10 h-10 bg-red-300 rounded-full"></div>
                </div>
                <div class="w-16 h-16 opacity-0"></div>
                <div class="w-16 h-16 opacity-0"></div>
                <div class="w-16 h-16 bg-white relative overflow-hidden">
                    <div class="absolute top-3 left-3 w-10 h-10 bg-red-300 rounded-full"></div>
                </div>
                <div class="w-16 h-16 opacity-0"></div>
                <div class="w-16 h-16 opacity-0"></div>
                <div class="w-16 h-16 opacity-0"></div>
                <div class="w-16 h-16 bg-red-600 relative overflow-hidden">
                    <div class="absolute top-3 left-3 w-10 h-10 bg-red-300 rounded-full"></div>
                    <div class="absolute top-0 left-2 w-6 h-3 bg-red-800"></div>
                </div>
            </div>

            <!-- Original right pixels grid -->
            <div class="grid grid-cols-3 gap-0 absolute right-20 top-40 z-10">
                <div class="w-16 h-16 opacity-0"></div>
                <div class="w-16 h-16 opacity-0"></div>
                <div class="w-16 h-16 bg-teal-600 relative overflow-hidden">
                    <div class="absolute top-3 left-3 w-10 h-10 bg-gray-700 rounded-full"></div>
                </div>
                <div class="w-16 h-16 opacity-0"></div>
                <div class="w-16 h-16 opacity-0"></div>
                <div class="w-16 h-16 opacity-0"></div>
                <div class="w-16 h-16 opacity-0"></div>
                <div class="w-16 h-16 bg-amber-200 relative overflow-hidden">
                    <div class="absolute top-3 left-3 w-10 h-10 bg-amber-300 rounded-full"></div>
                </div>
                <div class="w-16 h-16 bg-orange-500 relative overflow-hidden">
                    <div class="absolute top-3 left-3 w-10 h-10 bg-orange-300 rounded-full"></div>
                </div>
                <div class="w-16 h-16 opacity-0"></div>
                <div class="w-16 h-16 opacity-0"></div>
                <div class="w-16 h-16 opacity-0"></div>
                <div class="w-16 h-16 bg-amber-200 relative overflow-hidden">
                    <div class="absolute top-3 left-3 w-10 h-10 bg-amber-300 rounded-full"></div>
                </div>
                <div class="w-16 h-16 opacity-0"></div>
                <div class="w-16 h-16 opacity-0"></div>
                <div class="w-16 h-16 opacity-0"></div>
                <div class="w-16 h-16 bg-gray-800 relative overflow-hidden">
                    <div class="absolute top-3 left-3 w-10 h-10 bg-gray-700 rounded-full"></div>
                </div>
                <div class="w-16 h-16 opacity-0"></div>
                <div class="w-16 h-16 opacity-0"></div>
                <div class="w-16 h-16 opacity-0"></div>
                <div class="w-16 h-16 bg-yellow-300 relative overflow-hidden">
                    <div class="absolute top-3 left-3 w-10 h-10 bg-yellow-200 rounded-full"></div>
                </div>
            </div>

            <!-- Add more scattered pixel elements around the home section -->
            <div class="absolute top-24 left-1/3 w-12 h-12 bg-purple-500 opacity-60 z-10"></div>
            <div class="absolute top-36 right-1/3 w-10 h-10 bg-green-400 opacity-60 z-10"></div>
            <div class="absolute top-60 left-2/3 w-8 h-8 bg-yellow-300 opacity-60 z-10"></div>
            <div class="absolute top-80 right-1/4 w-14 h-14 bg-red-400 opacity-60 z-10"></div>

            <div class="text-center text-white mt-20 mb-10 relative z-20">
                <h1 class="text-6xl mb-4 tracking-wider">UPT KOMPUTER<br>Institut Widya Pratama</h1>
                <p class="text-xl mb-8">Mahasiswa Keren, Menjadi Asisten
                </p>

                <div class="relative inline-block mb-16">
                    <div class="relative pixel-button px-8 py-3 bg-purple-300 text-2xl text-white z-10">
                        <div class="pixel-corner top-left"></div>
                        <div class="pixel-corner top-right"></div>
                        <div class="pixel-corner bottom-left"></div>
                        <div class="pixel-corner bottom-right"></div>
                        Join Now!
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- home -->

    <!-- about -->
    <section class="mt-32 relative">
        <!-- Pixel art elements scattered around about section -->
        <div class="w-14 h-14 bg-green-500 absolute -top-8 left-20 opacity-60 z-10"></div>
        <div class="w-10 h-10 bg-yellow-400 absolute top-16 right-16 opacity-60 z-10"></div>
        <div class="w-8 h-8 bg-pink-500 absolute top-32 left-40 opacity-60 z-10"></div>
        <div class="w-12 h-12 bg-blue-400 absolute -top-16 right-40 opacity-60 z-10"></div>

        <div class="w-16 h-16 bg-teal-600 absolute bottom-8 left-1/4 opacity-60 z-10 relative overflow-hidden">
            <div class="absolute top-3 left-3 w-10 h-10 bg-teal-300 rounded-full"></div>
        </div>

        <div class="w-16 h-16 bg-orange-500 absolute top-24 right-64 opacity-60 z-10 relative overflow-hidden">
            <div class="absolute top-3 left-3 w-10 h-10 bg-orange-300 rounded-full"></div>
        </div>

        <div
            class="bg-gradient-to-br from-indigo-800 to-indigo-900 mx-auto w-4/5 relative rounded-xl shadow-2xl overflow-hidden">
            <div class="absolute top-0 right-0 w-64 h-64 bg-indigo-600 rounded-full -mt-20 -mr-20 opacity-20"></div>
            <div class="absolute bottom-0 left-0 w-40 h-40 bg-purple-500 rounded-full -mb-10 -ml-10 opacity-20"></div>


            <div class="absolute top-0 left-0 w-4 h-4 bg-yellow-400"></div>
            <div class="absolute top-0 right-0 w-4 h-4 bg-yellow-400"></div>
            <div class="absolute bottom-0 left-0 w-4 h-4 bg-yellow-400"></div>
            <div class="absolute bottom-0 right-0 w-4 h-4 bg-yellow-400"></div>


            <div class="text-center pt-8 pb-4 px-6">
                <h2 class="text-4xl text-white font-bold inline-block relative">
                    About UPT Komputer
                    <span
                        class="absolute -bottom-2 left-1/4 right-1/4 h-1 bg-gradient-to-r from-transparent via-purple-400 to-transparent"></span>
                </h2>
            </div>


            <div class="flex flex-wrap md:flex-nowrap items-center justify-between px-8 pb-10 relative z-10">
                <div class="w-full md:w-2/5">
                    <div class="relative">
                        <div
                            class="absolute -inset-2 bg-gradient-to-r from-purple-400 to-indigo-400 rounded-lg blur-sm opacity-75">
                        </div>
                        @foreach ($about as $a)
                            <img src="{{ asset('storage/' . $a->foto_about) }}" alt="UPT Komputer"
                                class="relative rounded-lg shadow-xl transform transition-transform hover:scale-105 duration-300">
                        @endforeach
                        <div
                            class="absolute -bottom-4 -right-4 w-16 h-16 bg-yellow-400 rounded-md -rotate-6 z-0 opacity-80">
                        </div>
                    </div>
                </div>
                <div class="text-left w-full md:w-1/2 pr-0 md:pr-8 mb-6 md:mb-0">
                    <p
                        class="text-xl text-white leading-relaxed backdrop-blur-sm bg-indigo-900/30 p-6 rounded-lg border border-indigo-700/50">
                        UPTKOMP adalah singkatan dari Unit Pelaksana Teknis Komputer. UPT Komputer merupakan salah satu
                        unit kerja di Institut Widya Pratama Pekalongan. Unit ini bertanggung jawab menyediakan
                        infrastruktur teknologi informasi, baik hardware dan software, serta ketersediaan internet.
                        <span class="block mt-4 font-semibold text-purple-200">
                            Unit ini merupakan support system bagi seluruh jurusan/fakultas di universitas.
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- about -->


    <!-- services -->
    <section class="mt-32 relative">
        <!-- Pixel art elements scattered around services section -->
        <div class="w-10 h-10 bg-red-500 absolute -top-10 left-12 opacity-60 z-10"></div>
        <div class="w-8 h-8 bg-blue-400 absolute top-8 right-24 opacity-60 z-10"></div>
        <div class="w-12 h-12 bg-green-500 absolute top-20 left-32 opacity-60 z-10"></div>
        <div class="w-16 h-16 bg-purple-400 absolute -top-16 right-12 opacity-60 z-10"></div>

        <div class="w-16 h-16 bg-amber-400 absolute bottom-12 left-16 opacity-60 z-10 relative overflow-hidden">
            <div class="absolute top-3 left-3 w-10 h-10 bg-amber-300 rounded-full"></div>
        </div>

        <div class="w-16 h-16 bg-teal-500 absolute top-40 right-40 opacity-60 z-10 relative overflow-hidden">
            <div class="absolute top-3 left-3 w-10 h-10 bg-teal-300 rounded-full"></div>
            <div class="absolute top-5 left-5 w-6 h-4 bg-teal-700"></div>
        </div>

        <div class="w-12 h-12 bg-pink-500 absolute bottom-24 right-20 opacity-60 z-10"></div>

        <div
            class="bg-gradient-to-br from-indigo-800 to-indigo-900 mx-auto w-4/5 relative rounded-xl shadow-2xl overflow-hidden">
            <div class="absolute bottom-0 right-0 w-64 h-64 bg-indigo-600 rounded-full -mt-20 -mr-20 opacity-20"></div>
            <div class="absolute top-0 left-0 w-40 h-40 bg-purple-500 rounded-full -mb-10 -ml-10 opacity-20"></div>

            <div class="absolute top-0 left-0 w-4 h-4 bg-yellow-400"></div>
            <div class="absolute top-0 right-0 w-4 h-4 bg-yellow-400"></div>
            <div class="absolute bottom-0 left-0 w-4 h-4 bg-yellow-400"></div>
            <div class="absolute bottom-0 right-0 w-4 h-4 bg-yellow-400"></div>
            <div class="text-center pt-8 pb-4 px-6">
                <h2 class="text-4xl text-white font-bold inline-block relative">
                    Our Services
                    <span
                        class="absolute -bottom-2 left-1/4 right-1/4 h-1 bg-gradient-to-r from-transparent via-purple-400 to-transparent"></span>
                </h2>
            </div>
            <div class="flex flex-wrap px-8 pb-10 relative z-10">
                @foreach ($services as $s)
                    <div class="w-full md:w-1/3 p-4">
                        <div class="bg-white rounded-lg shadow-lg p-6">
                            <h3 class="text-xl font-semibold mb-2">{{ $s->nama_services }}</h3>
                            <div class="bg-gray-200 rounded-lg overflow-hidden">
                                <img src="{{ asset('storage/' . $s->foto_services) }}" alt=""
                                    class="w-full h-48 object-cover">
                            </div>

                            <p class="text-gray-700">{{ $s->deskripsi_services }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- services -->


    <!-- gallery -->
    <section class="mt-32 relative">
        <!-- Pixel art elements scattered around gallery section -->
        <div class="w-12 h-12 bg-yellow-500 absolute -top-16 left-16 opacity-60 z-10"></div>
        <div class="w-10 h-10 bg-red-400 absolute top-4 right-32 opacity-60 z-10"></div>
        <div class="w-8 h-8 bg-green-600 absolute top-20 left-24 opacity-60 z-10"></div>
        <div class="w-14 h-14 bg-purple-500 absolute -top-20 right-20 opacity-60 z-10"></div>

        <div class="w-16 h-16 bg-blue-500 absolute bottom-16 left-32 opacity-60 z-10 relative overflow-hidden">
            <div class="absolute top-3 left-3 w-10 h-10 bg-blue-300 rounded-full"></div>
        </div>

        <div class="w-16 h-16 bg-pink-400 absolute top-32 right-16 opacity-60 z-10 relative overflow-hidden">
            <div class="absolute top-3 left-3 w-10 h-10 bg-pink-300 rounded-full"></div>
            <div class="absolute top-5 left-5 w-6 h-4 bg-pink-600"></div>
        </div>

        <div class="w-12 h-12 bg-orange-500 absolute bottom-12 right-40 opacity-60 z-10"></div>

        <div
            class="bg-gradient-to-br from-indigo-800 to-indigo-900 mx-auto w-4/5 relative rounded-xl shadow-2xl overflow-hidden">

            <div class="absolute top-0 right-0 w-64 h-64 bg-indigo-600 rounded-full -mt-20 -mr-20 opacity-20"></div>
            <div class="absolute bottom-0 left-0 w-40 h-40 bg-purple-500 rounded-full -mb-10 -ml-10 opacity-20"></div>
            <div class="absolute top-0 left-0 w-4 h-4 bg-yellow-400"></div>
            <div class="absolute top-0 right-0 w-4 h-4 bg-yellow-400"></div>
            <div class="absolute bottom-0 left-0 w-4 h-4 bg-yellow-400"></div>
            <div class="absolute bottom-0 right-0 w-4 h-4 bg-yellow-400"></div>

            <!-- Add more pixel elements inside the gallery container -->
            <div class="w-10 h-10 bg-green-400 absolute top-12 left-12 opacity-40"></div>
            <div class="w-8 h-8 bg-red-500 absolute top-20 right-16 opacity-40"></div>
            <div class="w-10 h-10 bg-blue-500 absolute bottom-16 right-24 opacity-40"></div>
            <div class="w-8 h-8 bg-yellow-400 absolute bottom-12 left-20 opacity-40"></div>

            <div class="text-center pt-8 pb-4 px-6">
                <h2 class="text-4xl text-white font-bold inline-block relative">
                    Gallery
                    <span
                        class="absolute -bottom-2 left-1/4 right-1/4 h-1 bg-gradient-to-r from-transparent via-purple-400 to-transparent"></span>
                </h2>
                <h3 class="text-xl text-white font-semibold mt-2">
                    A collection of unforgettable memories
                </h3>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 px-8 pb-10 relative z-10">
                @foreach ($gallery as $g)
                    <div class="bg-gray-200 rounded-lg overflow-hidden">
                        <img src="{{ asset('storage/' . $g->foto_gallery) }}" alt="Gallery Image 1"
                            class="w-full h-48 object-cover">
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- gallery -->


    <!-- contact -->
    <section class="mt-32 relative">
        <!-- Pixel art elements scattered around contact section -->
        <div class="w-12 h-12 bg-purple-500 absolute -top-12 left-24 opacity-60 z-10"></div>
        <div class="w-10 h-10 bg-green-400 absolute top-8 right-12 opacity-60 z-10"></div>
        <div class="w-8 h-8 bg-blue-500 absolute top-24 left-16 opacity-60 z-10"></div>
        <div class="w-14 h-14 bg-red-400 absolute -top-16 right-32 opacity-60 z-10"></div>

        <div class="w-16 h-16 bg-yellow-500 absolute bottom-8 left-12 opacity-60 z-10 relative overflow-hidden">
            <div class="absolute top-3 left-3 w-10 h-10 bg-yellow-300 rounded-full"></div>
        </div>

        <div class="w-16 h-16 bg-pink-500 absolute top-36 right-24 opacity-60 z-10 relative overflow-hidden">
            <div class="absolute top-3 left-3 w-10 h-10 bg-pink-300 rounded-full"></div>
            <div class="absolute top-5 left-5 w-6 h-4 bg-pink-700"></div>
        </div>

        <div class="w-12 h-12 bg-teal-500 absolute bottom-16 right-12 opacity-60 z-10"></div>

        <div
            class="bg-gradient-to-br from-indigo-800 to-indigo-900 mx-auto w-4/5 relative rounded-xl shadow-2xl overflow-hidden">

            <div class="absolute top-0 right-0 w-64 h-64 bg-indigo-600 rounded-full -mt-20 -mr-20 opacity-20"></div>
            <div class="absolute bottom-0 left-0 w-40 h-40 bg-purple-500 rounded-full -mb-10 -ml-10 opacity-20"></div>


            <div class="absolute top-0 left-0 w-4 h-4 bg-yellow-400"></div>
            <div class="absolute top-0 right-0 w-4 h-4 bg-yellow-400"></div>
            <div class="absolute bottom-0 left-0 w-4 h-4 bg-yellow-400"></div>
            <div class="absolute bottom-0 right-0 w-4 h-4 bg-yellow-400"></div>

            <!-- Add more pixel elements inside the contact container -->
            <div class="w-8 h-8 bg-orange-400 absolute top-16 left-16 opacity-40"></div>
            <div class="w-10 h-10 bg-purple-500 absolute top-32 right-24 opacity-40"></div>
            <div class="w-8 h-8 bg-teal-500 absolute bottom-24 right-16 opacity-40"></div>
            <div class="w-10 h-10 bg-pink-400 absolute bottom-20 left-24 opacity-40"></div>

            <div class="text-center pt-8 pb-4 px-6">
                <h2 class="text-4xl text-white font-bold inline-block relative">
                    Join Us
                    <span
                        class="absolute -bottom-2 left-1/4 right-1/4 h-1 bg-gradient-to-r from-transparent via-purple-400 to-transparent"></span>
                </h2>
            </div>
            <div class="flex flex-wrap md:flex-nowrap items-center justify-between mt-7 px-8 pb-10 relative z-10">
                <div class="w-full md:w-2/5">
                    <div class="relative">
                        <div
                            class="absolute -inset-2 bg-gradient-to-r from-purple-400 to-indigo-400 rounded-lg blur-sm opacity-75">
                        </div>
                        <img src="/api/placeholder/400/320" alt="UPT Komputer"
                            class="relative rounded-lg shadow-xl transform transition-transform hover:scale-105 duration-300">
                        <div
                            class="absolute -bottom-4 -right-4 w-16 h-16 bg-yellow-400 rounded-md -rotate-6 z-0 opacity-80">
                        </div>
                    </div>

                    <div class="relative mt-6">
                        <div
                            class="absolute -inset-2 bg-gradient-to-r from-purple-400 to-indigo-400 rounded-lg blur-sm opacity-75">
                        </div>
                        <img src="/api/placeholder/400/320" alt="UPT Komputer"
                            class="relative rounded-lg shadow-xl transform transition-transform hover:scale-105 duration-300">
                        <div
                            class="absolute -bottom-4 -right-4 w-16 h-16 bg-yellow-400 rounded-md -rotate-6 z-0 opacity-80">
                        </div>
                    </div>
                </div>

                <form class="w-full md:w-1/2 bg-white rounded-lg shadow-lg p-6">
                    <div class="mb-4">
                        <label for="nim" class="block text-gray-700 font-semibold mb-2">Nomer Induk
                            Mahasiswa</label>
                        <input type="text" id="nim" class="w-full p-2 border border-gray-300 rounded"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="nama" class="block text-gray-700 font-semibold mb-2">Nama Lengkap</label>
                        <input type="text" id="nama" class="w-full p-2 border border-gray-300 rounded"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="kelas" class="block text-gray-700 font-semibold mb-2">Kode Kelas</label>
                        <input type="text" id="kelas" class="w-full p-2 border border-gray-300 rounded"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="no" class="block text-gray-700 font-semibold mb-2">WhatsApp</label>
                        <input type="number" id="no" class="w-full p-2 border border-gray-300 rounded"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="alamat" class="block text-gray-700 font-semibold mb-2">Alamat</label>
                        <textarea id="alamat" rows="4" class="w-full p-2 border border-gray-300 rounded" required></textarea>
                    </div>
                    <button type="submit" onclick="kirimPesan()"
                        class="bg-purple-500 text-white font-semibold py-2 px-4 rounded hover:bg-purple-600 transition duration-300">
                        Join Now
                    </button>
                </form>
            </div>
        </div>
    </section>
    <!-- contact -->

    <!-- Add floating pixel elements throughout the page -->
    <div class="fixed pointer-events-none z-0">
        <!-- Top row -->
        <div class="w-8 h-8 bg-red-400 fixed top-1/6 left-1/12 opacity-50"></div>
        <div class="w-10 h-10 bg-blue-500 fixed top-1/5 right-1/12 opacity-50"></div>
        <div class="w-6 h-6 bg-green-400 fixed top-1/4 left-1/4 opacity-50"></div>
        <div class="w-12 h-12 bg-yellow-400 fixed top-1/3 right-1/4 opacity-50"></div>

        <!-- Middle row -->
        <div class="w-10 h-10 bg-purple-500 fixed top-1/2 left-1/8 opacity-50"></div>
        <div class="w-8 h-8 bg-pink-400 fixed top-2/5 right-1/8 opacity-50"></div>
        <div class="w-6 h-6 bg-teal-500 fixed top-3/5 left-1/3 opacity-50"></div>
        <div class="w-12 h-12 bg-amber-400 fixed top-1/2 right-1/3 opacity-50"></div>

        <!-- Bottom row -->
        <div class="w-8 h-8 bg-indigo-500 fixed bottom-1/6 left-1/6 opacity-50"></div>
        <div class="w-10 h-10 bg-orange-500 fixed bottom-1/5 right-1/6 opacity-50"></div>
        <div class="w-12 h-12 bg-rose-400 fixed bottom-1/4 left-1/3 opacity-50"></div>
        <div class="w-6 h-6 bg-lime-500 fixed bottom-1/3 right-1/3 opacity-50"></div>
    </div>


    <!-- Interactive pixel elements that change on hover -->
    <div class="container mx-auto mt-8 mb-16 relative z-10">
        <div class="flex flex-wrap justify-center gap-4">
            <div class="w-16 h-16 bg-red-400 hover:bg-purple-400 transition-colors duration-300 relative">
                <div class="absolute top-3 left-3 w-10 h-10 bg-red-300 rounded-full"></div>
            </div>
            <div class="w-16 h-16 bg-blue-400 hover:bg-yellow-400 transition-colors duration-300 relative">
                <div class="absolute top-3 left-3 w-10 h-10 bg-blue-300 rounded-full"></div>
            </div>
            <div class="w-16 h-16 bg-green-400 hover:bg-pink-400 transition-colors duration-300 relative">
                <div class="absolute top-3 left-3 w-10 h-10 bg-green-300 rounded-full"></div>
            </div>
            <div class="w-16 h-16 bg-yellow-400 hover:bg-teal-400 transition-colors duration-300 relative">
                <div class="absolute top-3 left-3 w-10 h-10 bg-yellow-300 rounded-full"></div>
            </div>
            <div class="w-16 h-16 bg-purple-400 hover:bg-orange-400 transition-colors duration-300 relative">
                <div class="absolute top-3 left-3 w-10 h-10 bg-purple-300 rounded-full"></div>
            </div>
        </div>
    </div>

    <!-- Footer with pixel elements -->
    <footer class="bg-indigo-800 text-white py-6 mt-32 relative">
        <!-- Footer pixel decorations -->
        <div class="w-10 h-10 bg-yellow-400 absolute top-0 left-12 opacity-40"></div>
        <div class="w-8 h-8 bg-red-500 absolute top-4 right-16 opacity-40"></div>
        <div class="w-12 h-12 bg-green-400 absolute bottom-0 left-24 opacity-40"></div>
        <div class="w-10 h-10 bg-purple-500 absolute bottom-4 right-20 opacity-40"></div>

        <div class="container mx-auto text-center">
            <p>&copy; 2025 UPT Komputer - Institut Widya Pratama.</p>
        </div>
    </footer>
</body>

</html>

<script>
    function kirimPesan() {
        const nim = document.getElementById('nim').value;
        const nama = document.getElementById('nama').value;
        const kelas = document.getElementById('kelas').value;
        const no = document.getElementById('no').value;
        const alamat = document.getElementById('alamat').value;

        const baseUrl = "{{ $contact }}"; // Link WhatsApp dari database

        if (!baseUrl) {
            alert("Link WhatsApp belum dikonfigurasi!");
            return;
        }

        // Tambahkan data dari form ke dalam teks pesan
        const message = `Haloo Admin UPT Komp,%0A
Saya Ingin Mendaftar UPT%0A%0A
NIM Saya : *${nim}*%0A
Nama Saya : *${nama}*%0A
Kelas Saya : *${kelas}*%0A
No WhatsApp : *${no}*%0A
Alamat : *${alamat}*%0A`;

        // Gabungkan dengan link WhatsApp
        const finalUrl = baseUrl + "&text=" + message;

        // Arahkan ke WhatsApp
        window.open(finalUrl, '_blank');
    }
</script>
