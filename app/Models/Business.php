<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;

    protected $hidden = ['id', 'created_at', 'updated_at', 'area_id', 'category_id', 'featured'];

    protected $fillable = [
        'name', 'description', 'contact', 'address', 'time', 'website_link', 'facebook_link',
        'instagram_link', 'featured', 'category_id', 'area_id'
    ];

    public function destination() {
        return $this->belongsTo(Destination::class);
    }

    public function categories() {
        $this->belongsToMany(Category::class);
    }

    public function reviews() {
        return $this->hasMany(Review::class);
    }

    public function imgUrls() {
        return $this->hasMany(ImgUrl::class);
    }
}

