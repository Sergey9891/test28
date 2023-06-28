<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    protected $fillable = ['name', 'car_brand_id'];

    public function carBrand()
    {
        return $this->belongsTo(CarBrand::class);
    }

    public function cars()
    {
        return $this->hasMany(Car::class);
    }
}
