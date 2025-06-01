<?php

namespace App\Http\Controllers\Auth;

use App\Contracts\NotificationService;
use App\Contracts\UserPhoneService;
use App\Rules\PhoneNumber;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AuthPhoneRequest;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Carbon;
use App\Traits\TempPesanNotifTrait;
use Illuminate\Support\Facades\Session;
use ProtoneMedia\Splade\Facades\Toast;





class AuthPhoneController extends Controller
{
    use TempPesanNotifTrait;
    private $notifService;
    private $userPhoneVar;
    public function __construct(UserPhoneService $userPhoneVar, NotificationService $notifService)
    {
        $this->userPhoneVar = $userPhoneVar;
        $this->notifService = $notifService;
    }
    public function akses()
    {
        return view('auth.phone.akses');
    }

    public function akses_validasi(Request $request)
    {
        $data = $request->validate([
            'phone_number' => ['required', 'min:9', 'max:14', new PhoneNumber],
            'phone_code'   => ['max:6', 'nullab-le'],
        ]);
        if (User::where('phone_number', $request->phone_number)->doesntExist()) {
            $user = $this->userPhoneVar->storeDataValidasi($data);
            event(new Registered($user));
        }
        $nomor = $request->phone_number;
        // Logic
        // TODO : kenapa buat 2 kali kode ? ini nanti diperbaiki
        $kode = rand(1000,9999);
        $user = $this->userPhoneVar->findDataPhone($nomor);
        $this->userPhoneVar->updateOTP($nomor, $kode);
        $this->notifService->kirimNotifWa($user->phone_code.ltrim($user->phone_number, '0'), $this->formatPesanAksesWa($kode));
        Toast::title('Sukses !')->message('Kode OTP '.$kode.' Berhasil Dikirim. Silahkan Cek Pesan Whatsapp Anda');

        return redirect()->route('akses.nomor', ['nomor' => $request->phone_number, 'kode' => $kode]);
    }

    public function akses_nomor($nomor)
    {
        $user = $this->userPhoneVar->findDataPhone($nomor);
        return view('auth.phone.kode', compact('nomor', 'user'));
    }

    public function akses_nomor_kirim_otp($nomor)
    {
        // Logic
        $kode = rand(1000,9999);
        $user = $this->userPhoneVar->findDataPhone($nomor);
        $this->userPhoneVar->updateOTP($nomor, $kode);
        $this->notifService->kirimNotifWa($user->phone_code.ltrim($user->phone_number, '0'), $this->formatPesanAksesWa($kode));
        Toast::title('Sukses !')->message('Kode OTP '.$kode.' Berhasil Dikirim. Silahkan Cek Pesan Whatsapp Anda');


        return response()->json([
            'status'  => 'success',
            'message' => 'OTP sent successfully',
        ]);
    }

    public function akses_nomor_kirim_otp_sesi_waktu_mulai($nomor)
    {
        // Get current time
        $currentTime = Carbon::now()->timestamp;

        // Set session
        Session::put($nomor.'startTime', $currentTime);
        Session::put($nomor.'remainingTime', 60);

        return response()->json([
            'startTime'     => Session::get($nomor.'startTime'),
            'remainingTime' => Session::get($nomor.'remainingTime')
        ]);
    }

    public function akses_nomor_kirim_otp_sesi_waktu_batas($nomor)
    {
        // Get remaining time from session
        $startTime = Session::get($nomor.'startTime', 0);
        $remainingTime = Session::get($nomor.'remainingTime', 0);

        // Calculate remaining time
        $elapsedTime = time() - $startTime;
        $remainingTime = max(0, $remainingTime - $elapsedTime);

        return response()->json(['remainingTime' => $remainingTime]);
    }

    public function akses_login(AuthPhoneRequest $request)
    {
        $request->authenticate();
        request()->session()->regenerate();
        return redirect()->intended('/dashboard');

    }
}
