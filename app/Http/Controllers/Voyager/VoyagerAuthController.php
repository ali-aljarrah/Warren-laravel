<?php

namespace App\Http\Controllers\Voyager;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use TCG\Voyager\Http\Controllers\VoyagerAuthController as BaseVoyagerAuthController;

class VoyagerAuthController extends BaseVoyagerAuthController
{
    public function validateLogin(Request $request)
    {
        $this->validate($request, [
            $this->username() => 'required|string',
            'password' => 'required|string',
            'g-recaptcha-response' => function ($attribute, $value, $fail) {
                try {
                    $secretKey = env("GOOGLE_RECAPTCHA_SECRET");
                    $remoteIp = $_SERVER["REMOTE_ADDR"];
                    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$value&remoteip=$remoteIp";

                    // verify captcha
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, $url);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                    $output = curl_exec($ch);
                    $response = json_decode($output);

                    if(!$response->success){
                        $fail($attribute." google reCapthca failed!");
                    }
                } catch (\Exception $e) {
                    Log::error($e->getMessage());
                    $fail("Something went wrong! Please email or call us! Thanks!");
                }
            },
        ]);
    }
}
