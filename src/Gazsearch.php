<?php

namespace Morrisrobinson\UkgazSearch;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class Gazsearch
{
    public static function event(string $findthis)
    {
        $client = new \GuzzleHttp\Client();

        $key = config('gazsearch.apikey'); //'bf70a127-1bc63f43';

        // `findthis=${findthis}&bbox=${ext}&limit=100`
        $params = [
            'query' => [
                'api_token' => $key,
               'findthis' =>  $findthis,
               'lacode' => 'E09000017',
               'limit' => '100'
            ]
         ];

        try {
            $response = $client->get('https://gaz.buchananservices.uk/addsearch/v1/opendata', $params);
            return $response->getBody();
        } catch(GuzzleException $e) {
            //handle laters
            return response()->json([
                'error' => $e->getMessage()
            ],status: 500);
        }
    }
}
