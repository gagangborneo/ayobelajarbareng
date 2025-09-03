<x-app-layout>

    <!-- Main Content -->
    <main class="py-24 px-4 container mx-auto">
        <!-- Hero Section -->
        <section class="bg-gradient-to-r from-primary-500 to-secondary rounded-2xl p-6 text-white mb-8">
            <div class="absolute right-0 bottom-0 opacity-10">
                <i class="fas fa-mosque text-[180px]"></i>
            </div>
            <div class="max-w-md relative z-10">
                <h2 class="text-2xl font-bold mb-3">Nah Bagus Nih</h2>
                <p class="mb-5">Belajar bareng sesuai panduan Al-quran dan Sunnah. Yuk Tanyakan saja.</p>
                <button class="bg-white text-primary-500 font-semibold py-2 px-6 rounded-full flex items-center">
                    <i class="fas fa-comment-dots mr-2"></i> Mulai Chat Sekarang
                </button>
            </div>
        </section>

        <!-- Profile Card for Logged In User -->
        @auth
            <section class="bg-white rounded-2xl shadow-md p-4 my-6 flex items-center">
                <div class="relative mr-4">
                    <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1160&q=80"
                        alt="Profile" class="w-16 h-16 rounded-full object-cover border-2 border-primary-500">
                    <div class="absolute bottom-0 right-0 bg-green-500 rounded-full w-4 h-4 border-2 border-white"></div>
                </div>
                <div>
                    <h3 class="font-bold text-gray-800">Ahmad Fauzi</h3>
                    <p class="text-sm text-gray-600">Member sejak Jan 2023</p>
                    <div class="flex mt-1">
                        <span class="bg-primary-200 text-primary-500 text-xs px-2 py-0.5 rounded mr-2">Level 3</span>
                        <span class="bg-amber-100 text-amber-600 text-xs px-2 py-0.5 rounded">125 XP</span>
                    </div>
                </div>
                <div class="ml-auto">
                    <button class="bg-primary-200 text-primary-500 p-2 rounded-full">
                        <i class="fas fa-cog"></i>
                    </button>
                </div>
            </section>
        @endauth

        <!-- Blog List -->
        <section class="py-2 sm:py-4 mx-auto max-w-5xl to-light">
            <h1 class="text-2xl font-bold text-primary-900 mb-4">Konten Islami</h1>
            <!-- All Tab Content -->
            <div class="tab-content active" id="all">
                <!-- Blog Item 1 -->
                @for ($i = 0; $i < 15; $i++)
                    <Link class="bg-white lg:h-48 flex rounded-xl shadow-md overflow-hidden mb-5">
                        <div class="w-1/3 sm:w-1/4 flex bg-center bg-cover bg-[url('https://plus.unsplash.com/premium_photo-1677533016380-a3072389c44b?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')]">
                        </div>
                        <div class="p-2 sm:p-4 w-2/3 sm:w-3/4 flex flex-col justify-between">
                            <div class="mb-4">
                                <h3 class="font-bold text:md sm:text-xl mb-1">Tata Cara Shalat yang Benar Sesuai Sunnah</h3>
                                <p class="text-gray-600 text-xs sm:text-base truncate">
                                    Panduan lengkap shalat sesuai tuntunan Nabi Muhammad SAW untuk shalat khusyuk.
                                    {{-- {{ Str::limit('Panduan lengkap shalat sesuai tuntunan Nabi Muhammad SAW untuk shalat khusyuk.', 30) }} --}}
                                </p>
                            </div>
                            <div class="flex justify-start items-center space-x-4 text-gray-500 text-xs md:text-sm mt-auto">
                                <div class="flex items-center">
                                    <x-fluentui-timer-16 class="w-4 mr-1" />
                                    <span>5 menit membaca</span>
                                </div>
                                <div class="flex items-center">
                                    <x-fluentui-calendar-ltr-16 class="w-4 mr-1" />
                                    <span>12 Jun 2023</span>
                                </div>
                            </div>
                        </div>
                    </Link>
                @endfor
            </div>
        </section>


    </main>
</x-app-layout>
