<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Api_ctrl extends Controller
{
     public function  api1()
{
     return "meyti love shohre";
}


public function get_api()
{
    $client = new GuzzleHttp\Client;

    $response = $client->get('http://127.0.0.1:8000/api/index', [
        'headers' => [
            'Authorization' => 'Bearer YOUR_TOKEN_HERE',
        ],
        'form_params' => [
            'VisitDate' => '2017-05-08',
            'PartySize' => '2',
            'ChannelCode' => 'ONLINE',
        ],
    ]);

// You need to parse the response body
// This will parse it into an array
    $response = json_decode($response->getBody(), true);
}

}
