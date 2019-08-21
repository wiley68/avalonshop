<?php

namespace App\Http\Controllers;

use App\ReviewSupport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewSupportController extends Controller
{
    public function addReview(Request $request)
    {
        if ($request->method('post')){
            if (!empty($request->input('id'))){
                $user_id = Auth::user()->id;
                $support_id = $request->input('id');
                $nickname = $request->input('nickname');
                $summary = $request->input('summary');
                $review_message = $request->input('review_message');

                $review = new ReviewSupport();
                $review->name = $nickname;
                $review->subject = $summary;
                $review->review = $review_message;
                $review->support_id = $support_id;
                $review->user_id = $user_id;
                $review->save();
                return response()->json(['success' => true]);
            }
        }
    }
}
