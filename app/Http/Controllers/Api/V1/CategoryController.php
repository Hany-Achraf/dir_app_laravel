<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller {
    public function index() {
        $categories =  Category::where('parent_id', NULL)->with('subcategories')->paginate(6);
        foreach($categories as $category) {
            $category->makeHidden('parent_id', 'created_at', 'updated_at');
            foreach($category->subcategories as $subcategory) {
                $subcategory->makeHidden('parent_id', 'img_path', 'created_at', 'updated_at');
            }
        }
        return $categories;
    }

    public function show($id) {

        $businesses = Category::findOrFail($id, ['id'])
                        ->businesses()
                        ->paginate(3, ['businesses.id', 'name', 'icon_img_path', 'working_time']);

        foreach($businesses as $business) {
            $business->makeHidden('pivot');
        }

        return $businesses;
    }
}
