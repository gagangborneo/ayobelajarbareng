<!-- Header Navigation (Fixed) -->
{{-- <header class="fixed top-0 left-0 right-0 bg-white shadow-md z-50">
    <nav class="container mx-auto px-4 py-3 flex justify-between items-center">
        <div class="flex items-center">
            <div class="bg-primary-500 rounded-full p-2 mr-3">
                <i class="fas fa-mosque text-white text-xl"></i>
            </div>
            <h1 class="text-xl font-bold text-primary-500">Lembaga Islami</h1>
        </div>
        <div class="flex items-center">
            <a href="/" class="text-gray-600 hover:text-primary-500 mr-3">Beranda</a>
            <a href="/chat" class="text-gray-600 hover:text-primary-500 mr-3">Chat</a>
            <a href="/aktivitas" class="text-gray-600 hover:text-primary-500 mr-3">Aktivitas</a>
            <a href="/akun" class="text-gray-600 hover:text-primary-500">Akun</a>
        </div>
    </nav>
</header> --}}

<header class="z-90 bg-white">
    <nav class="border border-gray-200 px-4 lg:px-6 py-4 bg-white fixed w-full transition-colors duration-300 ease-in-out" id="navbar">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <Link href="/" class="flex items-center">
                <img src="{{ url('/') }}/logo-nbn.png" class="mr-3 w-20" alt="NahBagusNih" />
            </Link>
            <div class="flex items-center lg:order-2">
                <Link href="#" class="text-white bg-primary-500 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                    Masuk
                </Link>
                <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
            <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <li>
                        <Link href="/" class="block py-2 pr-4 pl-3 {{ request()->routeIs('home') ? 'text-white rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0 dark:text-white' : 'text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700' }}" aria-current="page">
                            Home
                        </Link>
                    </li>
                    <li>
                        <Link href="/artikel" class="block py-2 pr-4 pl-3 {{ request()->routeIs('artikel.index') ? 'text-white rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0 dark:text-white' : 'text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700' }}">
                            Artikel
                        </Link>
                    </li>
                    <li>
                        <Link href="/chat" class="block py-2 pr-4 pl-3 {{ request()->routeIs('chat.index') ? 'text-white rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0 dark:text-white' : 'text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700' }}">
                            Chat
                        </Link>
                    </li>
                    {{-- <li>
                        <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">
                            Program Donasi
                        </a>
                    </li>
                    <li>
                        <a href="#" class="relative inline-flex  py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">
                            Akademi
                            <div class="absolute inline-flex items-center justify-center  text-xs p-1 font-bold text-primary-600 -top-4 -end-4 dark:border-gray-900">
                                Segera
                            </div>
                        </a>
                    </li> --}}
                </ul>
            </div>
        </div>
    </nav>
    {{-- <x-splade-script>
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 0) {
                navbar.classList.remove('dark:bg-transparent');
                navbar.classList.add('bg-white', 'dark:bg-gray-800');
            } else {
                navbar.classList.remove('bg-white', 'dark:bg-gray-800');
                navbar.classList.add('dark:bg-transparent');
            }
        });
    </x-splade-script> --}}
</header>
