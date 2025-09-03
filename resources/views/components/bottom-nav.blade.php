<nav class="fixed md:hidden bottom-0 left-0 right-0 bg-white border-t border-gray-200 flex justify-around items-center p-3 z-50">
    <Link href="/" class="flex flex-col items-center {{ request()->is('/') ? 'text-primary-500' : 'text-gray-500' }}">
        <x-fluentui-home-12 class="w-6" />
        <span class="text-xs mt-1">Beranda</span>
    </Link>
    <Link href="/chat" class="flex flex-col items-center {{ request()->is('chat') ? 'text-primary-500' : 'text-gray-500' }}">
        <x-fluentui-chat-12 class="w-6" />
        <span class="text-xs mt-1">Chat</span>
    </Link>
    {{-- <Link href="/aktivitas" class="flex flex-col items-center {{ request()->is('aktivitas') ? 'text-primary-500' : 'text-gray-500' }}">
        <x-fluentui-accessibility-16 class="w-6" />
        <span class="text-xs mt-1">Donasi</span>
    </Link> --}}
    <Link href="/akun" class="flex flex-col items-center {{ request()->is('akun') ? 'text-primary-500' : 'text-gray-500' }}">
        <x-fluentui-inprivate-account-16 class="w-6" />
        <span class="text-xs mt-1">Akun</span>
    </Link>
</nav>
