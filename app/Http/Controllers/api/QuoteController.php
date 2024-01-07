<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class QuoteController extends Controller
{
   public function index(string $times)
   {
    if($times <= 0) {
      return response()->json(['error' => 'insert a correct number times'], 400);
    }

    $endpoint = 'https://api.kanye.rest';
    $quotes = array();

    for($i = 1; $i <= $times; $i++) {
      $quote = Http::get($endpoint);
      $quotes[] = $quote->json();
    }

    return response()->json($quotes, 200);
   }
}
