<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function request(Request $request){
        $API_KEY="test_4f01a3897b975cb155caffbd459";
        $API_AUTH_TOKEN="test_50048e65f549e74220ff3969bb7";
        $API_SALT="50b96f2f863044f89662de4d10608541";
        $API_WEBSITE="test.instamojo.com";

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://$API_WEBSITE/api/1.1/payment-requests/");
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:$API_KEY",
                  "X-Auth-Token:$API_AUTH_TOKEN"));
$payload = Array(
    'purpose' => 'advance booking',
    'amount' => 500,
    'phone' => '6765654545',
    'buyer_name' => 'aman',
    'redirect_url' => 'http://www.example.com/redirect/',
    'send_email' => true,
    'webhook' => 'http://www.example.com/webhook/',
    'send_sms' => true,
    'email' => 'foo@example.com',
    'allow_repeated_payments' => false
);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$response = curl_exec($ch);
curl_close($ch); 

 $result=json_decode($response,true);
 dd($result);

 $longurl=$result['payment_request']['longurl'];
    }
}
