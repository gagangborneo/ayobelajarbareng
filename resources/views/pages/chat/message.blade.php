<x-message-layout>
    <main class="pt-16 pb-28 max-w-5xl container mx-auto">
        <div class="container mx-auto">
            <!-- Main Chat Area -->
        <div class="flex-1 flex flex-col">

            <!-- Messages Container -->
            <div class="overflow-y-auto bg-slate-50 p-4 flex-1 h-screen ">
                <!-- Date separator -->
                <div class="flex justify-center my-6">
                    <span class="text-xs text-gray-500 bg-gray-200 px-3 py-1 rounded-full">Hari Ini</span>
                </div>

                <!-- Ustad message -->
                <div class="flex mb-4">
                    <div class="w-8 h-8 bg-primary-600 rounded-full flex items-center justify-center flex-shrink-0 mr-2">
                        <x-carbon-user class="w-4 text-white" />
                    </div>
                    <div class="bg-primary-50 rounded-lg max-w-[300px] sm:max-w-lg p-3">
                        <p>Assalamu'alaikum warahmatullahi wabarakatuh. Ada yang bisa saya bantu?</p>
                        <span class="message-time block text-right text-xs mt-1">10:15</span>
                    </div>
                </div>

                <!-- User message -->
                <div class="flex mb-4 justify-end">
                    <div class="bg-primary-500 text-white rounded-lg max-w-[300px] sm:max-w-lg p-3">
                        <p>Wa'alaikumsalam warahmatullahi wabarakatuh. Ustadz, saya ingin bertanya mengenai masalah mendidik anak dalam Islam.</p>
                        <span class="message-time block text-right text-xs mt-1">10:18</span>
                    </div>
                </div>

                <!-- Ustad message -->
                <div class="flex mb-4">
                    <div class="w-8 h-8 bg-primary-600 rounded-full flex items-center justify-center flex-shrink-0 mr-2">
                        <x-carbon-user class="w-4 text-white" />
                    </div>
                    <div class="bg-primary-50 rounded-lg max-w-[300px] sm:max-w-lg p-3">
                        <p>Baik, silakan. Semoga Allah memudahkan urusan Anda. Anak Anda berusia berapa?</p>
                        <span class="message-time block text-right text-xs mt-1">10:20</span>
                    </div>
                </div>

                <!-- User message -->
                <div class="flex mb-4 justify-end">
                    <div class="bg-primary-500 text-white rounded-lg max-w-[300px] sm:max-w-lg p-3">
                        <p>Anak saya baru berusia 5 tahun. Saya ingin menanamkan nilai-nilai Islam sejak dini, tapi seringkali mengalami kesulitan.</p>
                        <span class="message-time block text-right text-xs mt-1">10:22</span>
                    </div>
                </div>

                <!-- Ustad message -->
                <div class="flex mb-4">
                    <div class="w-8 h-8 bg-primary-600 rounded-full flex items-center justify-center flex-shrink-0 mr-2">
                        <x-carbon-user class="w-4 text-white" />
                    </div>
                    <div class="bg-primary-50 rounded-lg max-w-[300px] sm:max-w-lg p-3">
                        <p>Memang penting sekali menanamkan nilai Islam sejak dini. Rasulullah SAW bersabda: "Setiap anak dilahirkan dalam keadaan fitrah, lalu kedua orangtuanyalah yang menjadikannya Yahudi, Nasrani, atau Majusi."</p>
                        <span class="message-time block text-right text-xs mt-1">10:25</span>
                    </div>
                </div>

                <!-- Ustad message -->
                <div class="flex mb-4">
                    <div class="w-8 h-8 bg-primary-600 rounded-full flex items-center justify-center flex-shrink-0 mr-2">
                        <x-carbon-user class="w-4 text-white" />
                    </div>
                    <div class="bg-primary-50 rounded-lg max-w-[300px] sm:max-w-lg p-3">
                        <p>Untuk anak usia 5 tahun, yang terpenting adalah keteladanan dan pembiasaan. Mulailah dengan hal-hal sederhana seperti:</p>
                        <ol class="list-decimal pl-5 mt-2">
                            <li>Mengajak shalat berjamaah</li>
                            <li>Membaca doa sehari-hari</li>
                            <li>Menceritakan kisah Nabi</li>
                            <li>Memberi contoh akhlak yang baik</li>
                        </ol>
                        <span class="message-time block text-right text-xs mt-1">10:27</span>
                    </div>
                </div>

                <!-- User message -->
                <div class="flex mb-4 justify-end">
                    <div class="bg-primary-500 text-white rounded-lg max-w-[300px] sm:max-w-lg p-3">
                        <p>Terima kasih ustaz. Apakah ada buku atau referensi yang recommended untuk parenting islami?</p>
                        <span class="message-time block text-right text-xs mt-1">10:30</span>
                    </div>
                </div>

                <!-- Ustad typing indicator -->
                <div class="flex mb-4">
                    <div class="w-8 h-8 bg-primary-600 rounded-full flex items-center justify-center flex-shrink-0 mr-2">
                        <x-carbon-user class="w-4 text-white" />
                    </div>
                    <div class="typing-indicator">
                        <div class="typing-dot"></div>
                        <div class="typing-dot"></div>
                        <div class="typing-dot"></div>
                    </div>
                </div>
            </div>

            <!-- Message Input -->
            <div class="fixed bottom-0 max-w-5xl w-full bg-white border-t border-gray-200 p-4">
                <div class="flex items-center">
                    <div class="flex-1 relative">
                        <textarea placeholder="Ketik pesan..." class="w-full px-4 py-3 bg-gray-100 border border-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-primary" rows="2"></textarea>
                        <button class="absolute right-3 top-2.5 text-gray-500 hover:text-primary">
                            {{-- <i class="far fa-smile"></i> --}}
                        </button>
                    </div>
                    <button class="ml-3 bg-primary-600 text-white rounded-full w-10 h-10 flex items-center justify-center hover:bg-blue-800">
                        <x-carbon-send-alt class="w-6 mt-1" />
                    </button>
                </div>
            </div>
        </div>
    </main>
</x-message-layout>
