<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Favorite;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
  public function show(string $user_id)
  {
    $favorites = Favorite::where('user_id', $user_id)->get();

    return response()->json($favorites, 200);
  }

  public function store(Request $request)
  {
    Favorite::create([
      'user_id' => $request->user_id,
      'quote' => $request->quote,
    ]);

    return response()->json([], 201);
  }

  public function destroy($id)
  {
    try 
    {
      $favorite = Favorite::findOrFail($id);
      $favorite->delete();
    
      return response()->json($favorite, 200);
    } 
    catch(ModelNotFoundException $e) 
    {
      return response()->json([], 404);
    }
  }
}
