<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Category;
use App\Models\Destination;
use App\Models\Promotion;
use App\Models\Event;
use App\Models\Business;

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
            $promotion->business->setAppends([]);
        }

        return [
            'categories'    =>  $categories,
            'destinations'  =>  $destinations,
            'events'        =>  $events,
            'promotions'    =>  $promotions,
        ];
    }

    public function search(Request $request) {
        $searchQuery = $request['search_query'];

        $promotions =  Promotion::where('name', 'LIKE', "%{$searchQuery}%");
        $totalPromotions =  $promotions->count();
        $promotion =  $promotions->with('business')->take(1)->get();
        $promotion->makeHidden('business_id', 'created_at', 'updated_at');


        $events = Event::where('name', 'LIKE', "%{$searchQuery}%");
        $totalEvents = $events->count();
        $event = $events->take(1)->get(['id', 'name', 'description', 'organizer', 'img_path', 'date_time']);

        $businesses = Business::where('name', 'LIKE', "%{$searchQuery}%");
        $totalBusinesses = $businesses->count();
        $business = $businesses->take(10)->get(['id', 'name', 'icon_img_path']);

        return [
            'promotions' => [
                'total'     => $totalPromotions,
                'data'      => $promotion,
            ],
            'events' =>  [
                'total'     => $totalEvents,
                'data'      => $event,
            ],
            'businesses' => [
                'total'     => $totalBusinesses,
                'data'      => $business,
            ],
        ];
    }
}
