<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Notifications\ResetPasswordNotification;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    // protected $hidden = [
    //     'password',
    //     'remember_token',
    // ];

    // protected $appends = ['avatar'];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function sendPasswordResetNotification($token) {
        $url = 'https://dir_app.test/reset-password?token=' . $token;
        $this->notify(new ResetPasswordNotification($url));
    }

    public function reviews() {
        return $this->hasMany(Review::class, 'user_id');
    }

    // wishlist businesses
    public function businesses() {
        return $this->belongsToMany(Business::class, 'wishlist')
                    ->as('wishlist')
                    ->withPivot('created_at')
                    ->select(['businesses.id', 'businesses.name', 'businesses.icon_img_path']);
    }
}
