<?php


namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Http;

class InvestApi
{
    /**
     * @var array $info
     */
    public $info;

    /**
     * @var float $symbol
     */
    public $symbol;

    static public function connect()
    {
        $client = new Client();
        try {
            $response = $client->request('GET', "https://api.hgbrasil.com/finance/stock_price?key=9e431567");
        }catch (RequestException $e){
            $error = $e->getMessage();
        }

        if(isset($error)){
            return ['error' => $error, 'message' => 'Não foi possivel conectar a API'];
        }
        return $response;
    }

    static public function searchSymbol($symbol)
    {
        $response = Http::get("https://api.hgbrasil.com/finance/stock_price", [
            'key' => '9e431567',
            'symbol' => $symbol
        ]);
        if($response->successful()){
            return $response;
        }
        return false;
    }
}