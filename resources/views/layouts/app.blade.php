<div class=" bg-white">
    {{-- @include('layouts.navigation') --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> --}}

    <!-- Page Heading -->
    <x-header />

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>

    <div class="py-16 text-center text-gray-400">
        <p>&copy; {{ date('Y') }} NahBAgusNih. All rights reserved.</p>
    </div>

    <!-- Chat Bubble -->
    <div class="fixed bottom-24 sm:bottom-12 right-4 z-40">
        <Link href="/chat" class="bg-primary-500 text-white p-4 flex items-center rounded-full shadow-lg pulse">
            Chat Ustad <x-fluentui-chat-12 class="w-6 ml-2" />
        </Link>
    </div>

        <!-- Bottom Navigation -->
    <x-bottom-nav />
</div>
