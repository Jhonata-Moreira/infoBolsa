<?php


namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Services\InvestApi;

class InvestApiController extends Controller
{

    public function getData($symbol)
    {
        return response()->json(\GuzzleHttp\json_decode(InvestApi::searchSymbol($symbol)), 200);
    }
}