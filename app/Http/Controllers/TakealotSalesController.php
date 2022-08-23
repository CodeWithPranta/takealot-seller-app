<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\User;

class TakealotsalesController extends Controller
{
    public function takealotsales(Request $request, $page_number = 1){

      $takealot_key = auth()->user()->takealot_key;
      $url = 'https://seller-api.takealot.com/v2/sales?page_number='.$page_number.'&page_size=30';
      //dd('Key '.$takealot_key);

      $takalotsales =  Http::withHeaders([
            'Authorization' => 'Key '.$takealot_key,
            'Content-Type' => 'application/json'
       ])->get($url);

       $response = json_decode($takalotsales->getBody()->getContents(), true);

       $pagination = $response['page_summary'];
       $total = $pagination['total'];
       $page_size = 30;
       $numOfpages = round($total/$page_size);
       $current_page = $pagination['page_number'];
       $next_page = $current_page + 1;

       return view(
        'takealot.takealotsales', compact( 'response',
            'numOfpages', 'current_page', 'next_page',
        )
        );


       //return dd($takalotsales->json());

       //return view('takealot.takealotsales')->with('takealotsales', json_decode($takalotsales, true));
    }
}
