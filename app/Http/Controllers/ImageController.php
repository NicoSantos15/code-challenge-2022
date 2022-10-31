<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    // Search for image in unsplash
    public function searchImage()
    {
        $search = Http::get('https://api.unsplash.com/search/photos?client_id=DkDypmHYUprv42t2F66S3HFIByNzeoTwAQTAIuMOFEE&query=pan')->json();
        return view('search')->with($search);
    }


    // Return random image
    public function getRandomImage()
    {
        $result = Unsplash::getRandom();
        return $result;
    }
}
