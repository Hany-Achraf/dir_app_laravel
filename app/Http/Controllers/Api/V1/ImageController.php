<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ImageController extends Controller {
    public function show(Request $request) {
        $path = $request['path'];
        if (!File::exists($path)) {
            abort(404);
        }
        $file = File::get($path);
        $type = File::mimeType($path);
        $response = response($file, 200);
        $response->header("Connection", "Keep-Alive");
        $response->header("Content-Type", $type);
        return $response;
    }
}
