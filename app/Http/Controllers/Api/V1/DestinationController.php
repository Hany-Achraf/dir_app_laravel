<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Models\Destination;

class DestinationController extends Controller {
    public function index() {
        return Destination::paginate(4, ['id', 'name', 'img_path']);
    }

    public function show($id) {
        // return Destination::with(['businesses' => function($query) {
        //     $query->select('businesses.id', 'businesses.name');
        // }])->findOrFail($id, ['id', 'name', 'img_path']);
        return Destination::with('businesses')->findOrFail($id, ['id', 'name', 'img_path']);
    }
}
