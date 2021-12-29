<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // protected $fillable = ['name'];
    // protected $visible = ['name'];

    // protected $hidden = ['parent_id', 'created_at', 'updated_at'];

    public function businesses() {
        $this->belongsToMany(Business::class);
    }

    public function subcategories() {
        return $this->hasMany(Category::class, 'parent_id');
    }
}
