<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Destination;
use App\Models\Promotion;
use App\Models\Event;

class HomeController extends Controller {
    public function index() {
        $categories =  Category::take(7)->where('parent_id', NULL)->with('subcategories')->get();
        foreach($categories as $category) {
            $category->makeHidden('parent_id', 'created_at', 'updated_at');
            foreach($category->subcategories as $subcategory) {
                $subcategory->makeHidden('parent_id', 'img_path', 'created_at', 'updated_at');
            }
        }

        $destinations = Destination::take(3)->get(['id', 'name', 'img_path']);

        $events = Event::take(3)->get(['id', 'name', 'description', 'organizer', 'img_path', 'date_time']);

        $promotions =  Promotion::take(3)->with('business')->get();
        foreach($promotions as $promotion) {
            $promotion->makeHidden('business_id', 'created_at', 'updated_at');
        }

        return [
            'categories'    =>  $categories,
            'destinations'  =>  $destinations,
            'events'        =>  $events,
            'promotions'    =>  $promotions,
        ];
    }
}
