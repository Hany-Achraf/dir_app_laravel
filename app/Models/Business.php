<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model {
    use HasFactory;

    // protected $fillable = [];
    protected $appends = ['avg_rate'];
    protected $hidden = ['reviews'];

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

    public function setOnWishlistAttribute($userId) {
        $this->attributes['on_user_wishlist'] = $this->users()->where('users.id', $userId)->exists();
    }

    public function getOnUserWishlistAttribute() {
        return $this->attributes['on_user_wishlist'];
    }

    public function setReviewedByUserAttribute($userId) {
        $this->attributes['reviewed_by_user'] = $this->reviews()->where('reviews.user_id', $userId)->exists();
    }

    public function getReviewedByUserAttribute() {
        return $this->attributes['reviewed_by_user'];
    }

    public function getAvgRateAttribute() {
        return round($this->reviews->avg('rate'));
    }
}

