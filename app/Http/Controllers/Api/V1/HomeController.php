<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Destination;
use App\Models\Promotion;
use App\Models\Event;

class HomeController extends Controller {
    public function index() {
        return [
            'categories'    => Category::take(7)->where('parent_id', NULL)
                                    ->with('subcategories')
                                    ->get(['id', 'name', 'img_path']),
            'destinations'  => Destination::take(3)
                                    ->get(['id', 'name', 'img_path']),
            'events'        => Event::take(3)
                                    ->get(['id', 'name', 'description', 'organizer', 'img_path', 'date_time']),
            'promotions' => Promotion::take(3)->get('*'),
        ];
    }
}
