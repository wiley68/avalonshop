<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function addReview(Request $request)
    {
        if ($request->method('post')){
            if (!empty($request->input('id'))){
                $user_id = Auth::user()->id;
                $product_id = $request->input('id');
                $nickname = $request->input('nickname');
                $summary = $request->input('summary');
                $review_message = $request->input('review_message');
                $price = $request->input('price');
                $value = $request->input('value');
                $quality = $request->input('quality');

                $review = new Review();
                $review->name = $nickname;
                $review->subject = $summary;
                $review->review = $review_message;
                $review->price = intval($price);
                $review->value = intval($value);
                $review->quantity = intval($quality);
                $review->product_id = $product_id;
                $review->user_id = $user_id;
                $review->save();
                return response()->json(['success' => true]);
            }    
        }
    }
}
