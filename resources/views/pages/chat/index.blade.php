<x-app-layout>
    <main class="py-24 max-w-5xl container mx-auto">
        <div class="container mx-auto">
            <div class="bg-white ">
            <div class="p-4 mb-2 border-b border-gray-200">
                <h2 class="text-lg font-bold text-primary">Chat Ustad</h2>
                {{-- <div class="relative mt-3">
                    <input type="text" placeholder="Cari percakapan..." class="w-full px-4 py-2 bg-gray-100 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-primary">
                    <i class="fas fa-search absolute right-3 top-2.5 text-gray-400"></i>
                </div> --}}
            </div>

            {{-- @auth --}}
            <div class="space-y-2" style="height: calc(100vh - 140px);">
                <!-- Chat List Item 1 -->
                @for ($i = 0; $i < 10; $i++)
                    <div class="chat-list-item active p-4 border border-gray-200 rounded-md cursor-pointer">
                        <Link href="{{ route('chat.message') }}" class="flex items-center">
                            <div class="">
                                <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center">
                                    <x-carbon-user class="w-6" />
                                </div>
                                <span class="absolute bottom-0 right-0 w-3 h-3 bg-success rounded-full border-2 border-white"></span>
                            </div>
                            <div class="ml-3 flex-1">
                                <div class="flex justify-between items-center">
                                    <h3 class="font-semibold text-gray-800">Masalah Rumah Tangga</h3>
                                    <span class="text-xs text-gray-500">10.30</span>
                                </div>
                                <p class="text-sm text-gray-500 truncate">Ust. Ahmad Al-Farsi</p>
                            </div>
                        </Link>
                    </div>
                @endfor
            </div>
            {{-- @else
            <div class="max-w-5xl text-center mx-auto mt-8 flex flex-col items-center">
                Yuk Masuk dan Mulai Chat Sekarang
                <a href="{{ route('login') }}" class="bg-primary-500 text-white font-semibold py-2 px-3 rounded-lg flex mt-2">
                    Masuk Sekarang <x-carbon-login class="w-4 ml-4" />
                </a>
            </div>
            @endauth --}}
        </div>
    </main>
</x-app-layout>
