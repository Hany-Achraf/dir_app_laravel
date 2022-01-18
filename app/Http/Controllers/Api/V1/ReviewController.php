<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Review;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReviewController extends Controller {
    public function index($business_id) {
        $reviews = Review::where('business_id', $business_id)
                        ->with('user:id,firstname,lastname,avatar_img_path')
                        ->orderBy('created_at', 'desc')->get();
        foreach($reviews as $review) {
            $review->makeHidden('user_id', 'business_id', 'updated_at');
        }
        return $reviews;
    }
    public function create(Request $request) {
        $review = new Review;
        $review->rate = $request['rate'];
        $review->comment = $request['comment'];
        $review->user_id = $request['user_id'];
        $review->business_id = $request['business_id'];
        $review->save();
    }

    public function destroy(Request $request) {
        $review = Review::where('user_id', $request['user_id'])
                        ->where('business_id', $request['business_id'])
                        ->firstOrFail();

        $review->delete();
    }
}
