<?php


namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Services\InvestApi;

class InvestApiController extends Controller
{

    public function getData()
    {
        $data = InvestApi::searchSymbol('btow3');

        return response()->json(\GuzzleHttp\json_decode($data), 200);
    }
}