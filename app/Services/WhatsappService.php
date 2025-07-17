<?php

namespace App\Services;
use App\Contracts\NotificationService;
use Illuminate\Support\Facades\Http;

use Throwable;


class WhatsappService implements NotificationService
{

    public function kirimNotifWa($nomorhp, $isipesan){
        $url        = env('WA_API_URL');
        $requestApi = Http::withBasicAuth(env('WA_API_USER'), env('WA_API_PASSWORD'))
                            ->withHeaders([
                                'Content-Type' => 'application/json',
                                'Accept'       => 'application/json',
                            ]);

        try {
            $response = $requestApi->post($url . '/send/message', [
                "phone" => $nomorhp . '@s.whatsapp.net',
                "message" => $isipesan,
            ]);
            $message = json_decode($response->body());
            return response()->json(['success' => true, 'message' => $message], 200);
        } catch (Throwable $th) {
            return response()->json(['success' => false, 'message' => $th->getMessage()], 500);
        }
    }
}

