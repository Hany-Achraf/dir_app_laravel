<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Business;

class BusinessController extends Controller {

    public function index() {
        // return Business::all('name', 'thumbnail');
        return Business::all();
    }

    public function show($id) {
        return Business::findOrFail($id)->with(['area', 'category', 'reviews.user', 'imgUrls'])->get();
    }
}
