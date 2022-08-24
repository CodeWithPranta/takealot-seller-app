<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OffersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $page_number = 1)
    {
      $takealot_key = auth()->user()->takealot_key;
      $url = 'https://seller-api.takealot.com/v2/offers?page_number='.$page_number.'&page_size=10';
      //dd('Key '.$takealot_key);

      $offers =  Http::withHeaders([
            'Authorization' => 'Key '.$takealot_key,
            'Content-Type' => 'application/json'
       ])->get($url);

       $response = json_decode($offers->getBody()->getContents(), true);

       //return dd($response);

       $pagination = $response;
       $total = $pagination['total_results'];
       $page_size = 10;
       $numOfpages = round($total/$page_size);
       $current_page = $pagination['page_number'];
       $next_page = $current_page + 1;

       return view(
        'takealot.takealotoffers', compact( 'response',
            'numOfpages', 'current_page', 'next_page',
        )
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
