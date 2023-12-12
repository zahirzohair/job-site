<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ArticleController extends Controller
{
    public function index(){
        //NYT API
        // $apiKey = config('app.api_key');
        // $url = 'https://api.nytimes.com/svc/search/v2';

        // $response = Http::get($url.'/articlesearch.json?q=sports&api-key='. $apiKey);

        // The Guardian API
        //$response = Http::get('https://content.guardianapis.com/search?q=politics&api-key=b60ae673-ac5d-455b-8856-8847765ab47a');
        // $response = Http::get('https://content.guardianapis.com/tags?api-key=b60ae673-ac5d-455b-8856-8847765ab47a');

        // Newsapi.org 
         $response = Http::get('https://newsapi.org/v2/everything?q=politics&sortBy=popularity&apiKey=6361b11bf9724d05a83d231df29604e5');


          dd(json_decode($response));
        // return $response;
    }
}
