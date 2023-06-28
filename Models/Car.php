<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = ['car_model_id', 'year', 'mileage', 'color'];

    public function carModel()
    {
        return $this->belongsTo(CarModel::class);
    }
}
