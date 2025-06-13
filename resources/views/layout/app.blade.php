<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="../../css/app.css">
    <title>Movie Zero</title>
</head>

<body class="bg-gray-800 text-white">
    <nav class="bg-gray-900 border-b border-gray-700 container mx-auto rounded-full mt-2 px-10">
        <div class="container mx-auto px-2">
            <div class="relative flex items-center justify-between h-16">
                <!-- Mobile menu button -->
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    <button type="button"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Logo + Nav -->
                <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                    <a href="/" class="flex-shrink-0 flex items-center">
                        <img class="block lg:hidden h-8 w-auto rounded-full"
                            src="https://cdn.pixabay.com/photo/2022/07/17/19/22/movie-7328179_1280.png"
                            alt="Workflow">
                        <img class="hidden lg:block h-8 w-auto rounded-full"
                            src="https://cdn.pixabay.com/photo/2022/07/17/19/22/movie-7328179_1280.png"
                            alt="Workflow">
                    </a>
                    <div class="hidden sm:block sm:ml-6">
                        <div class="flex space-x-4">
                            <a href="/movie"
                                class="text-white px-3 py-2 rounded-md text-sm font-medium"
                                aria-current="page">Movie</a>
                            <a href="/tv"
                                class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">TV
                                Shows</a>
                            <a href="/actor"
                                class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Actors</a>
                        </div>
                    </div>
                </div>

                <!-- Profile dropdown -->
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    <div class="relative group">
                        <button type="button"
                            class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                            id="user-menu" aria-haspopup="true">
                            <span class="sr-only">Open user menu</span>
                            <img class="h-8 w-8 rounded-full cursor-pointer"
                                src="https://wallpapers.com/images/hd/matching-anime-profile-pictures-923-x-948-o86k3jsdjhgtdvp5.jpg"
                                alt="">
                        </button>
                        <!-- Dropdown menu -->
                        <div
                            class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 hidden group-hover:block transition-all delay-1000">
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                Admin Dashboard
                            </a>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                About
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div class="sm:hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="#"
                    class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium"
                    aria-current="page">Movie</a>
                <a href="#"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">TV
                    Shows</a>
                <a href="#"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Actors</a>
            </div>
        </div>
    </nav>
    @yield('content')

    <footer class="bg-[#141414] text-gray-500 py-8 mt-16 border-t border-gray-800">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <p class="text-sm mb-4 md:mb-0">© {{ date('Y') }} Meng Sea</p>
                <ul class="flex space-x-6 text-sm">
                    <li><a href="#" class="hover:text-white transition">Home</a></li>
                    <li><a href="#" class="hover:text-white transition">Movies</a></li>
                    <li><a href="#" class="hover:text-white transition">TV Shows</a></li>
                    <li><a href="#" class="hover:text-white transition">Contact</a></li>
                </ul>
            </div>
            <div class="mt-6 text-xs text-gray-600 text-center">
                This is a demo movie app. All movie data provided by TMDB API.
            </div>
        </div>
    </footer>

</body>

</html>