<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Models\Photo;

class PhotoController extends Controller {
    public function index($id) {
        return Photo::where('business_id', $id)->get(['path']);
    }
}
