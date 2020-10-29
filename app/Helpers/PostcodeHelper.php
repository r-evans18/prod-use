<?php

namespace App\Helpers;

use Carbon\Carbon;
use Unirest;

class PostcodeHelper
{
    public static function getPostcodeDetails($postcode) {
        $headers = array(
            'Accept' => 'application/json'
        );
        $response = Unirest\Request::get(
            'https://api.postcodes.io/postcodes/'.$postcode,
            $headers
        );
        $response = (array) $response;

        if ($response['code'] == 200) {
            $postcodeDetails = ([
                'latitude' => $response['body']->result->latitude,
                'longitude' => $response['body']->result->longitude,
            ]);
        } else {
            $postcodeDetails = ([
                'latitude' => 0,
                'longitude' => 0,
            ]);
        }

        return $postcodeDetails;
    }
}
