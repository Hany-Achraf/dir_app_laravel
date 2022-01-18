<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Photo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PhotoController extends Controller {
    public function index($id) {
        return Photo::where('business_id', $id)->get(['path']);
    }
}
