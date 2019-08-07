<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Favorite;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function addFavorite(Request $request)
    {
        if ($request->method('post')){
            if (!empty($request->input('id'))){
                $favorite = Favorite::where(['user_id' => Auth::user()->id, 'product_id' => $request->input('id')])->first();
                if (empty($favorite)){
                    $favorite = new Favorite();
                    $favorite->user_id = Auth::user()->id;
                    $favorite->product_id = $request->input('id');
                    $favorite->save();
                    return response()->json(['result' => 'new']);
                }else{
                    return response()->json(['result' => 'old']);
                }
            }    
        }
    }

    public function delFavorite(Request $request)
    {
        if ($request->method('post')){
            if (!empty($request->input('id'))){
                $favorite = Favorite::where(['user_id' => Auth::user()->id, 'product_id' => $request->input('id')])->first();
                if (!empty($favorite)){
                    $favorite->delete();
                    return response()->json(['result' => 'del']);
                }else{
                    return response()->json(['result' => 'not']);
                }
            }    
        }
    }
}
