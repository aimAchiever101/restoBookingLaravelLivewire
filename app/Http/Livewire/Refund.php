<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Refund extends Component
{
    public $result;
    public $payment_id;
    public $status;
    public $body;
    public $refund_amount;
    public $total_amount;
    public function render()
    {
        return view('livewire.refund')->extends("layout.template");
    }
    public function mount($payment_id){
        $this->payment_id=$payment_id;
        $API_KEY="test_4f01a3897b975cb155caffbd459";
        $API_AUTH_TOKEN="test_50048e65f549e74220ff3969bb7";
        $API_SALT="50b96f2f863044f89662de4d10608541";
        $API_WEBSITE="test.instamojo.com";            

       

        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, "https://$API_WEBSITE/api/1.1/refunds/");
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER,
                    array("X-Api-Key:$API_KEY",
                          "X-Auth-Token:$API_AUTH_TOKEN"));
        $payload = Array(
            'transaction_id'=> 'partial_refund_1',
            'payment_id' => $this->payment_id,
            'type' => 'QFL',
            'body' => "Customer isn't satisfied with the quality"
        );
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
        $response = curl_exec($ch);
        curl_close($ch); 
        
        // echo $response;
        
       

$result=json_decode($response,true);

//  echo"<pre>";
//  print_r($result);
//  echo"</pre>";

$this->result=$result;

// dd($result);


    }
}
