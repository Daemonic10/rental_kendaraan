<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cars extends Model
{
    protected $fillable = [
        'brand_model',
        'category',
        'brand_model',
        'rental_rate_per_day',
        'plate_number',
        'image',
    ];
}
