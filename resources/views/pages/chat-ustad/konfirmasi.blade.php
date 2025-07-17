<div class="min-h-screen bg-gray-100">

    <div class="text-center py-8 bg-gray-100">
        <p class="text-sm text-gray-600">
            <Link href="{{ url('/') }}" class="text-md text-gray-600 hover:text-gray-900">
                &larr; Kembali
            </Link>
        </p>
    </div>

    <x-auth-card>
        <x-splade-form action="/pemesanan/kelas-profit-10-juta/store/{{ request()->ref ?? 100001 }}" class="space-y-4"
            confirm-text="Apakah data yang anda masukkan sudah benar ?" confirm="Konfirmasi" confirm-button="Benar"
            cancel-button="Belum" method="POST">


            <div class="container mx-auto py-8">
                <div class="max-w-lg mx-auto bg-white rounded-lg ">
                    <h2 class="text-2xl font-bold mb-6 text-center">Pilih Metode Transfer Donasi</h2>
                    <div class="py-6">
                        <h3 class="text-lg font-semibold mb-2">QR Code</h3>
                        <div class="space-y-2">
                            <label class="flex items-center p-4  border rounded-lg cursor-pointer hover:bg-gray-50">
                                <x-splade-radio name="payment_method" value="qris" class="mr-2" data-fee="{{ 123000 * 0.007 }}" data-inis="QRIS"/>
                                <img src="{{ url('/') }}/assets/pembayaran/qris.svg" alt="QRIS"
                                    class="h-6 mr-2">
                                QRIS
                            </label>
                        </div>
                    </div>

                    <div class="mb-4">
                        <h3 class="text-lg font-semibold mb-2">Virtual Account (VA)</h3>
                        <div class="space-y-2">
                            <label class="flex items-center p-4 border rounded-lg cursor-pointer hover:bg-gray-50">
                                <x-splade-radio name="payment_method" value="bsi" class="mr-2" data-fee="3500" data-inis="Bank BSI" data-type="virtual_account"/>
                                <img src="{{ url('/') }}/assets/pembayaran/bsi.png" alt="Bank BCA" class="h-6 mr-2">
                                Bank BSI
                            </label>
                            <label class="flex items-center p-4  border rounded-lg cursor-pointer hover:bg-gray-50">
                                <x-splade-radio name="payment_method" value="bmi" class="mr-2" data-fee="3500" data-inis="Bank Muamalat" data-type="virtual_account"/>
                                <img src="{{ url('/') }}/assets/pembayaran/muamalat.png" alt="Bank BCA" class="h-6 mr-2">
                                Bank Muamalat
                            </label>
                            <label class="flex items-center p-4  border rounded-lg cursor-pointer hover:bg-gray-50">
                                <x-splade-radio name="payment_method" value="bca" class="mr-2" data-fee="4000" data-inis="Bank BCA" data-type="virtual_account"/>
                                <img src="{{ url('/') }}/assets/pembayaran/bca.png" alt="Bank BCA"
                                    class="h-6 mr-2">
                                Bank BCA
                            </label>
                            <label class="flex items-center p-4  border rounded-lg cursor-pointer hover:bg-gray-50">
                                <x-splade-radio name="payment_method" value="bni" class="mr-2" data-fee="3500" data-inis="Bank BNI" data-type="virtual_account"/>
                                <img src="{{ url('/') }}/assets/pembayaran/bni.png" alt="Bank BNI"
                                    class="h-6 mr-2">
                                Bank BNI
                            </label>
                            <label class="flex items-center p-4  border rounded-lg cursor-pointer hover:bg-gray-50">
                                <x-splade-radio name="payment_method" value="bri" class="mr-2" data-fee="3500" data-inis="Bank BRI" data-type="virtual_account"/>
                                <img src="{{ url('/') }}/assets/pembayaran/bri.png" alt="Bank BRI"
                                    class="h-6 mr-2">
                                Bank BRI
                            </label>
                            <label class="flex items-center p-4  border rounded-lg cursor-pointer hover:bg-gray-50">
                                <x-splade-radio name="payment_method" value="mandiri" class="mr-2" data-fee="3500" data-inis="Bank Mandiri" data-type="virtual_account"/>
                                <img src="{{ url('/') }}/assets/pembayaran/mandiri.png" alt="Bank Mandiri"
                                    class="h-6 mr-2">
                                Bank MANDIRI
                            </label>
                        </div>
                    </div>
                    <div class="my-4">
                        <h3 class="text-lg font-semibold mb-2">e-Wallet</h3>
                        <div class="space-y-2">
                            <label class="flex items-center p-4  border rounded-lg cursor-pointer hover:bg-gray-50">
                                <x-splade-radio name="payment_method" value="linkaja" class="mr-2" data-fee="{{ 100000 * 0.007 }}" data-inis="LinkAja" data-type="e_wallet"/>
                                <img src="{{ url('/') }}/assets/pembayaran/linkaja.svg" alt="LinkAja"
                                    class="h-6 mr-2">
                                LinkAja
                            </label>
                            <label class="flex items-center p-4  border rounded-lg cursor-pointer hover:bg-gray-50">
                                <x-splade-radio name="payment_method" value="dana" class="mr-2" data-fee="{{ 100000 * 0.007 }}" data-inis="Dana" data-type="e_wallet"/>
                                <img src="{{ url('/') }}/assets/pembayaran/dana.svg" alt="Dana"
                                    class="h-6 mr-2">
                                Dana
                            </label>
                        </div>
                    </div>

                </div>
            </div>
            <div class="mt-6 grow sm:mt-8 lg:mt-0">
                <div
                    class="space-y-4 rounded-lg border border-gray-100 bg-gray-50 p-6 dark:border-gray-700 dark:bg-gray-800">
                    <div class="space-y-2">
                        <dl class="flex items-center justify-between gap-4">
                            <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Harga</dt>
                            <dd class="text-base font-medium text-gray-900 dark:text-white">Rp 100.000</dd>
                        </dl>

                        <dl class="flex items-center justify-between gap-4">
                            <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Biaya Transaksi</dt>
                            <dd id="transaction-fee" class="text-base font-medium text-gray-500">Rp </dd>
                        </dl>
                        <dl class="flex items-center justify-between gap-4">
                            <dt class="text-sm font-normal italic text-gray-800 dark:text-gray-400">- <text id="metode-pembayaran"></text></dt>
                        </dl>
                    </div>

                    <dl class="flex items-center justify-between gap-4 border-t border-gray-200 pt-2 dark:border-gray-700">
                        <dt class="text-base font-bold text-gray-900 dark:text-white">Total</dt>
                        <dd id="total-cost" class="text-base font-bold text-gray-900 dark:text-white">Rp </dd>
                    </dl>
                </div>
            </div>
            <x-splade-script>
                document.addEventListener("DOMContentLoaded", function() {
                    document.querySelectorAll('input[name="payment_method"]').forEach((elem) => {
                        elem.addEventListener("change", function(event) {
                            var fee = event.target.getAttribute('data-fee');
                            var name = event.target.getAttribute('data-inis');
                            var total = 100000 + parseInt(fee);
                            document.getElementById('transaction-fee').innerText = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR', minimumFractionDigits: 0, maximumFractionDigits: 0 }).format(fee);
                            document.getElementById('total-cost').innerText = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR', minimumFractionDigits: 0, maximumFractionDigits: 0 }).format(total);
                            document.getElementById('metode-pembayaran').innerText = name;
                        });
                    });
                });
            </x-splade-script>

            <div class="flex items-center justify-center">
                <x-splade-submit class="bg-primary-700 text-white" :label="__('Proses Transfer')" />
            </div>
        </x-splade-form>
    </x-auth-card>
</div>
