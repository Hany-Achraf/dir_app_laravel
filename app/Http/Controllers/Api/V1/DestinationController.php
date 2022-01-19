<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Destination;

class DestinationController extends Controller {
    public function index() {
        return Destination::paginate(4, ['id', 'name', 'img_path']);
    }

    public function show($id) {
        return Destination::findOrFail($id, ['id'])
                            ->businesses()
                            ->paginate(3, ['id', 'name', 'icon_img_path', 'working_time']);
    }
}
