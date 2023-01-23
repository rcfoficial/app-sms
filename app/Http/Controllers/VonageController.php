<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendVonageRequest;
use Illuminate\Http\Request;
use Twilio\TwiML\MessagingResponse;
use Twilio\Rest\Client;

class VonageController extends Controller
{
    public function index()
    {
        return view('vonage.index');
    }

    public function sendVonage()
        {
            $to_number      = '+16463386303';
            $vonage_number  = '+15043755723';



/*            $basic  = new \Vonage\Client\Credentials\Basic("4c6f24b5", "zi0BG1uuQQanXjDa");
            $client = new \Vonage\Client($basic);

            $response = $client->sms()->send(
                new \Vonage\SMS\Message\SMS($to_number, $vonage_number, 'A text message sent using the Nexmo SMS API')
            );

            $message = $response->current();

            if ($message->getStatus() == 0) {
                echo "The message was sent successfully\n";
            } else {
                echo "The message failed with status: " . $message->getStatus() . "\n";
            }*/

    }


}
