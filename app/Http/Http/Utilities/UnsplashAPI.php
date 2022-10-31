<?php

namespace App\Http\Utilities;

use Illuminate\Support\Facades\Http;

class UnsplashAPI
{
    public static function getImages($param_query)
    {
        $temp_query = $param_query;
        $images[] = ' '; // Data storage
        $client_id = 'DkDypmHYUprv42t2F66S3HFIByNzeoTwAQTAIuMOFEE'; // Developer id
        $image_count = 21; // Number of rows we want to show

        $unsplash = HTTP::get('https://api.unsplash.com/search/photos?client_id=' . $client_id . '&query=' . $temp_query . '&per_page=' . $image_count)->object();

        for ($i = 0; $i < count($unsplash->results); $i++) {
            $images[$i] = $unsplash->results[$i];
        }

        return $images;
    }


    public static function getRandom($param_query)
    {

        $images[] = ' '; // Data storage
        $temp_query = $param_query;
        $image_count = 21; // Number of rows we want to show
        $client_id = 'DkDypmHYUprv42t2F66S3HFIByNzeoTwAQTAIuMOFEE';

        $unsplash = HTTP::get('https://api.unsplash.com/search/photos?client_id=' . $client_id . '&query=' . $temp_query . '&per_page=' . $image_count)->object();

        for ($i = 0; $i < count($unsplash->results); $i++) {
            $images[$i] = $unsplash->results[$i];
        }

        return $images;

    }
}
 