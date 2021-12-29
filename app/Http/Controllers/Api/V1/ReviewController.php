<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller {
    public function index($id) {
        $reviews = Review::where('business_id', $id)->with('user:id,name,avatar_img_path')->get();
        foreach($reviews as $review) {
            $review->makeHidden('user_id', 'business_id', 'updated_at');
        }
        return $reviews;
    }
}
