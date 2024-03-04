<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PaymentRequestDetails extends Component
{
    public $result;
    public function render()
    {
        return view('livewire.payment_request_details')->extends("layout.template");
    }
    public function mount($payment_request_id){
        $this->payment_request_id= $payment_request_id;
        $API_KEY="test_4f01a3897b975cb155caffbd459";
        $API_AUTH_TOKEN="test_50048e65f549e74220ff3969bb7";
        $API_SALT="50b96f2f863044f89662de4d10608541";
        $API_WEBSITE="test.instamojo.com";        
       

        

        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, "https://$API_WEBSITE/api/1.1/payment-requests/$payment_request_id/");
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER,
                    array("X-Api-Key:$API_KEY",
                          "X-Auth-Token:$API_AUTH_TOKEN"));
        $response = curl_exec($ch);
        curl_close($ch);         

$result=json_decode($response,true);
// dd($result);
$this->result= $result;

// echo"<pre>";
// print_r($result);
// echo"</pre>";
    }
}
