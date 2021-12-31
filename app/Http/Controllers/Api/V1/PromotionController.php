<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Models\Promotion;

class PromotionController extends Controller {
    public function index() {
        $promotions =  Promotion::with('business')->paginate(3);
        foreach($promotions as $promotion) {
            $promotion->makeHidden('business_id', 'created_at', 'updated_at');
        }
        return $promotions;
    }
}
