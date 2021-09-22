<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;

class SmsController extends Controller
{
    public function sendSMS($number){
        Nexmo::message()->send([
            'to' => $number,
            'from' => 'Prelim App',
            'text' => 'Thanks for signing up to Prelim App. To complete your registration
                        please check your email for verification.        '
        ]);
    }
}
