<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Event;

class EventController extends Controller {
    public function index() {
        return Event::paginate(3, ['id', 'name', 'description', 'organizer', 'img_path', 'date_time']);
    }

    public function search(Request $request) {
        $searchQuery = $request['search_query'];
        $events = Event::where('name', 'LIKE', "%{$searchQuery}%")->paginate(20);
        return $events;
    }
}
