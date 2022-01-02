<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model {
    use HasFactory;

    public function businesses() {
        $businessAttributes = [
            'businesses.id', 'businesses.name', 'businesses.icon_img_path',
            'businesses.rating', 'businesses.working_time',
        ];
        return $this->belongsToMany(Business::class)->select($businessAttributes);
    }

    public function subcategories() {
        return $this->hasMany(Category::class, 'parent_id');
    }
}
