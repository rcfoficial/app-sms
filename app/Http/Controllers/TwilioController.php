<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendVonageRequest;
use Exception;
use Illuminate\Http\Request;
use Twilio\TwiML\MessagingResponse;
use Twilio\Rest\Client;

class TwilioController extends Controller
{
    public function index()
    {
        return view('vonage.index');
    }


    public function sendTwilio()
    {
        // Your Account SID and Auth Token from twilio.com/console
        $account_sid = 'ACaaf1bd22376bca4b6581b0552ac9a505';
        $auth_token = 'bc1qzk3kxhdxnzkpdgdn9ueg34y08smxgfv0hxvcu3';

        $twilio_number = "+15017122661";

        $client = new Client($account_sid, $auth_token);
        $client->messages->create(
            '+33644628069',
            array(
                'from' => $twilio_number,
                'body' => 'I sent this message in under 10 minutes!'
            )
        );

    }
}
