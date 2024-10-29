<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>The Job Post</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-screen {{-- overflow-hidden --}}">
    <div class="min-h-full h-full flex flex-col">
        <!-- MENU -->
        <header class="absolute inset-x-0 top-0 z-50">
            <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
                <!-- Logo -->
                <div class="flex lg:flex-1">
                    <a href="/"
                        class="-m-1.5 p-1.5 flex flex-row items-center gap-3 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-600">
                        <img class="h-8 w-auto" src="/images/logo.svg" alt="the job post logo">
                        <h1 class="text-2xl font-semibold">The Job Post</h1>
                    </a>
                </div>
                <div class="flex lg:hidden">
                    <!-- Bottone per aprire il menu mobile -->
                    <button id="menu-toggle" type="button"
                        class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                        <span class="sr-only">Open main menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>
                <div class="hidden lg:flex lg:gap-x-12">
                    <a href="/jobs"
                        class="text-md font-semibold leading-6 text-gray-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-600">Offerte</a>
                    <a href="#"
                        class="text-md font-semibold leading-6 text-gray-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-600">Aziende</a>
                    <!--<a href="#" class="text-sm font-semibold leading-6 text-gray-900">Marketplace</a>
                    <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Company</a>-->
                </div>
                @guest
                    <div class="hidden lg:flex lg:flex-1 lg:items-center lg:justify-end lg:gap-3">
                        <x-navigation.link-btn href="/login">Log in</x-navigation.link-btn>
                        <x-navigation.link-btn href="/register">Registrati</x-navigation.link-btn>
                    </div>
                @endguest
                @auth
                    <div class="hidden lg:flex lg:flex-1 lg:items-center lg:justify-end lg:gap-3">
                        <form action="/logout" method="POST">
                            @csrf
                            <x-buttons.default-button>Logout</x-buttons.default-button>
                        </form>
                        <x-navigation.link-btn>Profile</x-navigation.link-btn>
                    </div>
                @endauth
            </nav>

            <!-- Menu mobile -->
            <nav id="mobile-menu"
                class="fixed inset-y-0 right-0 z-50 w-full transform translate-x-full opacity-0 transition-all duration-300 lg:hidden bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10"
                aria-hidden="true">
                <div class="flex items-center justify-between">
                    <!-- Logo -->
                    <a href="/" class="-m-1.5 p-1.5 flex flex-row items-center gap-3">
                        <img class="h-8 w-auto" src="/images/logo.svg" alt="the job post logo">
                        <h1 class="text-2xl font-semibold">The Job Post</h1>
                    </a>
                    <!-- Bottone per chiudere il menu mobile -->
                    <button id="menu-close" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                        <span class="sr-only">Close menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <!-- Link di navigazione nel menu mobile -->
                <div class="mt-6 flow-root">
                    <div class="-my-6 divide-y divide-gray-500/10">
                        <div id="menu-item" class="space-y-2 py-6">
                            <a href="#"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Offerte</a>
                            <a href="#"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Aziende</a>
                            <!--<a href="#"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Marketplace</a>
                            <a href="#"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Company</a>-->
                        </div>
                        <div class="py-6">
                            <a href="#"
                                class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">
                                Login
                            </a>
                            <a href="/register"
                                class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">
                                Registrati
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        {{-- CONTENUTO HERO --}}
        <main>
            <div class="relative isolate flex items-center justify-center h-screen m-5 lg:m-0">
                {{ $slot }}
            </div>
        </main>

    </div>

    <!-- Codice JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.getElementById('menu-toggle');
            const mobileMenu = document.getElementById('mobile-menu');
            const menuClose = document.getElementById('menu-close');
            const menuItem = document.getElementById('menu-item');

            function closeMenu() {
                mobileMenu.setAttribute('aria-hidden', 'true');
                mobileMenu.classList.replace('translate-x-0', 'translate-x-full');
                mobileMenu.classList.replace('opacity-100', 'opacity-0');
            }

            menuItem.addEventListener('click', () => {
                closeMenu();
            });

            menuToggle.addEventListener('click', () => {
                mobileMenu.setAttribute('aria-hidden', 'false');
                mobileMenu.classList.replace('translate-x-full', 'translate-x-0');
                mobileMenu.classList.replace('opacity-0', 'opacity-100');
            });

            menuClose.addEventListener('click', () => {
                closeMenu();
            });
        });
    </script>
</body>


</html>
