<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;

class DestinationController extends Controller {
    return Destination::all(['id', 'name', 'img_path']);
}
