<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model {
    use HasFactory;

    // protected $fillable = [];

    public function destination() {
        return $this->belongsTo(Destination::class);
    }

    public function categories() {
        return $this->belongsToMany(Category::class);
    }

    public function reviews() {
        return $this->hasMany(Review::class);
    }

    public function photos() {
        return $this->hasMany(Photo::class);
    }

    public function promotions() {
        return $this->hasMany(Promotion::class);
    }

    public function users() {
        return $this->belongsToMany(User::class, 'wishlist');
    }
}

