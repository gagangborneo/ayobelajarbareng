<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    {{-- <div>
        @isset($logo)
            {{ $logo }}
        @else
            <Link href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </Link>
        @endisset
    </div> --}}

    <div class="w-full sm:max-w-md my-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
    <div class="text-center py-8 bg-gray-100">
        <p class="text-sm pt-4 text-gray-600">
            &copy; {{ date('Y') }} ayobelajarbareng.com
        </p>
    </div>
</div>
