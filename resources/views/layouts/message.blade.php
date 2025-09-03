<div class=" bg-white">
    {{-- @include('layouts.navigation') --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> --}}

    <header class="z-90">
        <nav class="border border-gray-200 px-4 lg:px-6 py-4 bg-white fixed w-full transition-colors duration-300 ease-in-out" id="navbar">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-5xl">
                <div class="flex items-center">
                    <div class="mr-6">
                        <Link href="{{ route('chat.index') }}" class="text-primary-800">
                            <x-carbon-chevron-left class="w-6 mt-1" />
                        </Link>
                    </div>
                    <div class="w-10 h-10 bg-primary-600 rounded-full flex items-center justify-center">
                        <x-carbon-user class="w-6 text-white" />
                    </div>
                    <div class="ml-3">
                        <h2 class="font-semibold text-gray-800">Ust. Ahmad Al-Farsi</h2>
                        <p class="text-xs text-success flex items-center">
                            <span class="w-2 h-2 bg-success rounded-full mr-1"></span>
                            Online
                        </p>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <button class="text-gray-500 hover:text-primary">
                        <i class="fas fa-phone-alt"></i>
                    </button>
                    <button class="text-gray-500 hover:text-primary">
                        <i class="fas fa-video"></i>
                    </button>
                    <button class="text-gray-500 hover:text-primary">
                        <i class="fas fa-info-circle"></i>
                    </button>
                </div>
            </div>
        </nav>
    </header>

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>


</div>
