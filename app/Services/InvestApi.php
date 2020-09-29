<?php


namespace App\Services;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class InvestApi extends Controller
{
    /**
     * @var float $symbol
     */
    public $symbol;

    static public function searchSymbol($symbol)
    {
        return Http::get('https://api.hgbrasil.com/finance/stock_price', [
            'key' => env('API_KEY'),
            'symbol' => $symbol
        ]);
    }
}