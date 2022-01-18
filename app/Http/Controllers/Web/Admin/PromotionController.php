<?php

namespace App\Http\Controllers\Web\Admin;

use App\Models\Promotion;
use App\Models\Business;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PromotionController extends Controller {
    public function index() {
        $promotions =  Promotion::with('business')->get();
        foreach($promotions as $promotion) {
            $promotion->makeHidden('business_id', 'created_at', 'updated_at');
        }
        return view('promotions.index', compact('promotions'));
    }

    public function create() {
        $businesses = Business::all('id', 'name');
        return view('promotions.create', compact('businesses'));
    }
}
