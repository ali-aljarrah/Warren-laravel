<?php

namespace App\Http\Controllers\Voyager;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use App\Rules\Recaptcha;
use TCG\Voyager\Http\Controllers\VoyagerAuthController as BaseVoyagerAuthController;

class VoyagerAuthController extends BaseVoyagerAuthController
{
    public function validateLogin(Request $request)
    {
        $validated = $request->validate([
            $this->username() => 'required|string',
           'password' => 'required|string',
            'g-recaptcha-response' => ['required', new Recaptcha()]
        ],
        [
             'g-recaptcha-response.required' => 'ReCaptcha is Required',
       ]);
    }
}
