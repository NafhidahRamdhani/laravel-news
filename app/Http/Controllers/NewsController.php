<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
class NewsController extends Controller
{
    public function getData(){
        $client = new Client();
        $request = $client->get('https://newsapi.org/v2/top-headlines?country=id&apiKey=d4686b9b37c14d499434ea07edbf7103');
        $response = $request->getBody();
        $result = json_decode($response);
        return view('home',['artikel'=>$result->articles]);
}
    
   
}
