<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImgUrl extends Model
{
    use HasFactory;

    protected $visible = ['url'];

    public function business() {
        return $this->belongsTo(Business::class);
    }
}
