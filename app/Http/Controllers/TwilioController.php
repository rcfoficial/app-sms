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

        $client = new Client(getenv('TWILIO_SID'), getenv('TWILIO_TOKEN'));
        $client->messages->create(
            '+16463386303',
            array(
                'from' => getenv('TWILIO_FROM'),
                'body' => 'I sent this message in under 10 minutes!'
            )
        );

    }
}
