<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Models\Business;

class BusinessController extends Controller {
    public function show($id) {
        $business =  Business::findOrFail($id);
        $business->makeHidden('created_at', 'updated_at', 'destination_id');
        return $business;
    }
}
