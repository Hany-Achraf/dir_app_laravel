<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model {
    use HasFactory;

    public function businesses() {
        $businessAttributes = ['id', 'name', 'icon_img_path', 'working_time'];
        return $this->hasMany(Business::class)->select($businessAttributes);
    }
}
