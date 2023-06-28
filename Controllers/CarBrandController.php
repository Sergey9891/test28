<?php

namespace App\Http\Controllers;

use App\Models\CarBrand;
use Illuminate\Http\Request;

class CarBrandController extends Controller
{
    public function index()
    {
        $carBrands = CarBrand::all();

        return response()->json($carBrands);
    }
}
