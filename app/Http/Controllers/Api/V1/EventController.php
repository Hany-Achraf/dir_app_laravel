<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller {
    public function index() {
        return Event::paginate(3, ['id', 'name', 'description', 'organizer', 'img_path', 'date_time']);
    }
}
