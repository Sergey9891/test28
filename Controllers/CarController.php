<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();

        return response()->json($cars);
    }

    public function show($id)
    {
        $car = Car::findOrFail($id);

        return response()->json($car);
    }

    public function store(Request $request)
    {
        $car = Car::create($request->all());

        return response()->json($car, 201);
    }

    public function update(Request $request, $id)
    {
        $car = Car::findOrFail($id);
        $car->update($request->all());

        return response()->json($car, 200);
    }

    public function destroy($id)
    {
        Car::destroy($id);

        return response()->json(null, 204);
    }
}
