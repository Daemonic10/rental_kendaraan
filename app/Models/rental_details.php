<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class rental_details extends Model
{
    protected $table = 'rental_details';

    protected $fillable = [
        'rental_id', 'car_id', 'day_count', 'sub_total',
    ];

    public function cars(){
        return $this->belongsTo(cars::class, "car_id");
    }

    public function rentals(){
        return $this->belongsTo(rentals::class, "rental_id");
    }
}
