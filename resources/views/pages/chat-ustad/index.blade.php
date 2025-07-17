<div class="min-h-screen bg-gray-100">

    <div class="text-center py-8 bg-gray-100">
        <p class="text-sm text-gray-600">
            <Link href="{{ url('/') }}" class="text-md text-gray-600 hover:text-gray-900">
                &larr; Kembali
            </Link>
        </p>
    </div>

    <div class=" flex justify-center items-center p-4 bg-gray-100">
        <div class="w-full sm:max-w-lg ">
            {{-- <div class="mb-4 p-4 px-6 bg-white shadow-md rounded-lg">
                <blockquote class="text-center p-4">
                    <p class="text-2xl font-medium text-gray-900 dark:text-white">
                        "Setiap pertanyaan adalah jalan menuju bertambahnya ilmu. <br>Ayo Belajar Bareng."
                    </p>
                </blockquote>
            </div> --}}
            <x-splade-form action=""
                confirm-text="Apakah data yang anda masukkan sudah benar ?"
                confirm="Konfirmasi"
                confirm-button="Benar"
                cancel-button="Belum"
                method="POST"
                :default="[
                                'phone_number' => auth()->user()->phone_number ?? '',
                                'jenis_peserta' => 'ikhwan',
                            ]"
                >
                @csrf
                <div class="mb-4 p-6 bg-white shadow-md rounded-lg space-y-2">
                    <h3 class="text-3xl font-bold flex justify-center text-center text-gray-700">
                        Tanya Ustad
                        {{-- اَلسَّلَامُ عَلَيْكُمْ وَرَحْمَةُ اللهِ وَبَرَكَا تُهُ --}}
                        {{-- <img src="https://www.freeiconspng.com/uploads/assalamualaikum-warahmatullahi-wabarakatuh-text-png-9.png" width="350" alt="assalamualaikum warahmatullahi" /> --}}
                    </h3>

                    @auth
                        <h3 class="text-xl font-medium text-center text-gray-900">Halo {{ auth()->user()->name }}</h3>

                        <div class="flex items-center">
                            <div class="relative w-full">
                                <x-splade-input type="tel" :label="__('Nomor HP Whatsapp')" name="phone_number" size="20" minlength="8" maxlength="15"
                                    class="block text-gray-900 bg-transparent appearance-none peer"
                                    placeholder="Masukkan Nomor : 08123456xxxx" required disabled />
                            </div>
                        </div>
                    @else
                        <h3 class="text-lg font-medium text-center text-gray-900">Isi data dulu</h3>
                        <div class="flex items-center mt-2">
                            <x-splade-select name="phone_code" :label="__('Nomor HP Whatsapp')" value="62" class="py-0 w-60 text-sm block" choices
                                required>
                                {{-- @include('components.website.phone-code') --}}
                            </x-splade-select>
                        </div>
                        <div class="flex items-center">
                            <div class="relative w-full">
                                <x-splade-input type="tel" name="phone_number" size="20" minlength="8" maxlength="15"
                                    class="block text-gray-900 bg-transparent appearance-none peer"
                                    placeholder="Masukkan Nomor : 08123456xxxx" required />
                            </div>
                        </div>
                        <div class="flex items-center justify-end ">
                            <div class="text-sm text-gray-500">
                                Contoh : 08123456789
                            </div>
                        </div>
                    @endauth

                    <x-splade-input id="name" type="text" name="name" :label="__('Nama')" required autofocus />
                    <x-splade-select name="jenis_peserta" :label="__('Jenis')" value="ikhwan" >
                        <option value="ikhwan">Ikhwan / Laki-laki</option>
                        <option value="akhwat">Akhwat / Perempuan</option>
                    </x-splade-select>
                    <div class="flex items-center justify-center mt-6">
                        <span class="text-md text-gray-500">Atau sudah punya akun ?, silahkan <a href="{{ route('login') }}" class="text-primary-600 underline">login</a></span>
                    </div>

                </div>

                <div class="mb-4 p-6 bg-white shadow-md rounded-lg">
                    <p class="text-sm text-gray-500">
                        * Syarat Penggunaan  : <br>
                        1. Memiliki akun whatsapp yang aktif. <br>
                        2. Mengisi data dengan baik dan benar. <br>
                        3. Menyertakan pertanyaan dengan baik dan jelas. <br>
                        4. Jumlah kuota peserta dibatasi, jika kuota penuh maka pendaftaran akan ditutup. <br>
                    </p>
                    <p class="text-sm text-gray-500">
                        * Batas Kuota : {{ $kuota ?? 0 }} dari {{ $total_kuota ?? 0 }} kuota tersedia.
                    </p>
                </div>
                <div class="mb-4 p-6 bg-white shadow-md rounded-lg">
                    <x-splade-textarea type="text" name="pertanyaan" :label="__('Yang ingin kamu tanyakan ?')" required autosize maxlength="2000" />
                    <div class="flex items-center justify-end pt-2">
                        <div class="text-sm text-gray-500">
                            Maksimal  2000 Karakter
                        </div>
                    </div>
                </div>

                <div class="mb-4 p-6 bg-white shadow-md rounded-lg">
                    <label for="donasi" class="block text-sm font-medium text-gray-700 mb-2">Salurkan donasi terbaikmu untuk mendukung layanan dakwah digital ini yang Insya Allah berkembang.</label>
                    <label for="donasi" class="block text-sm font-medium text-gray-700">Ingin Donasi ?</label>
                    <div class="grid grid-cols-2 gap-2 mt-2">
                        <div>
                            <label class="flex items-center space-y-2">
                                <input type="radio" class="focus:ring-primary-500 h-4 w-4 text-primary-600 border-gray-300 rounded" name="pembayaran_donasi" v-model="form.pembayarandonasi" value="25000" checked>
                                <span class="ml-2 block text-sm text-gray-700">25.000</span>
                            </label>
                            <hr class="py-1">
                            @foreach ([
                                50000 => 'Rp 50.000',
                                100000 => 'Rp 100.000',
                            ] as $value => $label)
                                <label class="flex items-center space-y-2">
                                    <input type="radio" class="focus:ring-primary-500 h-4 w-4 text-primary-600 border-gray-300 rounded" name="pembayaran_donasi" v-model="form.pembayarandonasi" value="{{ $value }}">
                                    <span class="ml-2 block text-sm text-gray-700">{{ $label }}</span>
                                </label>
                                <hr class="py-1">
                            @endforeach
                        </div>
                        <div>
                            @foreach ([
                                200000 => 'Rp 200.000',
                                500000 => 'Rp 500.000',
                                1000000 => 'Rp 1.000.000',
                            ] as $value => $label)
                                <label class="flex items-center space-y-2">
                                    <input type="radio" class="focus:ring-primary-500 h-4 w-4 text-primary-600 border-gray-300 rounded" name="pembayaran_donasi" v-model="form.pembayarandonasi" value="{{ $value }}">
                                    <span class="ml-2 block text-sm text-gray-700">{{ $label }}</span>
                                </label>
                                <hr class="py-1">
                            @endforeach
                        </div>
                    </div>
                    <label class="flex items-center pt-2">
                        <input type="radio" class="focus:ring-primary-500 h-4 w-4 text-primary-600 border-gray-300 rounded" name="pembayaran_donasi" v-model="form.pembayarandonasi" value="custom">
                        <input type="number" class="ml-2 text-xs block w-full border-gray-300 rounded" name="pembayaran_custom_donasi" v-model="form.pembayarandonasicustom" placeholder="Atau Masukkan nominal" min="0" step="1000" disabled>
                    </label>
                    <x-splade-script>
                        document.querySelectorAll('input[name="pembayaran_donasi"]').forEach(radio => {
                            radio.addEventListener('change', function() {
                                const customInput = document.querySelector('input[name="pembayaran_custom_donasi"]');
                                if (this.value === 'custom') {
                                    customInput.disabled = false;
                                    customInput.focus();
                                } else {
                                    customInput.disabled = true;
                                }
                            });
                        });
                    </x-splade-script>
                </div>


                <div class="flex items-center mt-4 p-4">
                    <input type="checkbox" class="h-4 w-4 text-primary-600 border-gray-300 rounded" name="konfirmasi" id="konfirmasi" required checked>
                    <label for="konfirmasi" class="ml-2 block text-sm text-gray-700">
                        Saya setuju dengan <a href="#" class="text-primary-600 underline">Kebijakan Privasi</a> dan <a href="#" class="text-primary-600 underline">Syarat Layanan</a>
                    </label>
                </div>
                <div class="flex items-center justify-center mt-6">
                    <button type="submit" class="bg-primary-700 text-medium text-white py-2.5 px-5 rounded-lg flex items-center justify-between">
                        Submit <x-carbon-chevron-right class="h-8 w-8 pl-2" />
                    </button>
                </div>
            </x-splade-form>
        </div>
    </div>

    <div class="text-center py-8 bg-gray-100">
        <p class="text-sm pt-4 text-gray-600">
            &copy; {{ date('Y') }} ayobelajarbareng.com
        </p>
    </div>
</div>

