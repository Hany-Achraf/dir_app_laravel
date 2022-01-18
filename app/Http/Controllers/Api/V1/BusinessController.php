<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Business;

class BusinessController extends Controller {
    public function show($id, Request $request) {
        $business =  Business::findOrFail($id);
        $business->makeHidden('destination_id', 'created_at', 'updated_at');

        $business->setAppends(['avg_rate', 'on_user_wishlist', 'reviewed_by_user']);
        $business->setOnWishlistAttribute($request['user_id']);
        $business->setReviewedByUserAttribute($request['user_id']);
        return $business;
    }

    public function search(Request $request) {
        $searchQuery = $request['search_query'];
        $businesses = Business::where('name', 'LIKE', "%{$searchQuery}%")->paginate(20);
        return $businesses;
    }
}
