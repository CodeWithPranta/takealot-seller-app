<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OfferfilterController extends Controller
{
    public function buyable_offers(){
        $takealot_key = auth()->user()->takealot_key;
        $url = 'https://seller-api.takealot.com/v2/offers/count?offer_statuses=Buyable';
        //dd('Key '.$takealot_key);

        $buyable_offers =  Http::withHeaders([
              'Authorization' => 'Key '.$takealot_key,
              'Content-Type' => 'application/json'
         ])->get($url);

         $response = json_decode($buyable_offers->getBody()->getContents(), true);

         return dd($response);
    }

    public function not_buyable_offers(){
        $takealot_key = auth()->user()->takealot_key;
        $url = 'https://seller-api.takealot.com/v2/offers/count?offer_statuses=Not%20Buyable';
        //dd('Key '.$takealot_key);

        $not_buyable_offers =  Http::withHeaders([
              'Authorization' => 'Key '.$takealot_key,
              'Content-Type' => 'application/json'
         ])->get($url);

         $response = json_decode($not_buyable_offers->getBody()->getContents(), true);

         return dd($response);
    }

    public function disabled_offers_by_seller(){
        $takealot_key = auth()->user()->takealot_key;
        $url = 'https://seller-api.takealot.com/v2/offers/count?offer_statuses=Disabled%20by%20Seller';
        //dd('Key '.$takealot_key);

        $disabled_offers_by_seller =  Http::withHeaders([
              'Authorization' => 'Key '.$takealot_key,
              'Content-Type' => 'application/json'
         ])->get($url);

         $response = json_decode($disabled_offers_by_seller->getBody()->getContents(), true);

         return dd($response);
    }
}
