<?php

namespace App\Http\Controllers;

use App\Models\cars;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = cars::all();
        return view('cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'brand_model' => 'required',
            'category' => 'required',
            'rental_rate_per_day' => 'required',
            'plate_number' => 'required',
        ]);

        cars::create($validate);
        return redirect('/cars');

    }

    /**
     * Display the specified resource.
     */
    public function show(cars $cars)
    {
        return view('cars.show', compact('cars'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cars $cars)
    {
        return view('cars.edit', compact('cars'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cars $cars)
    {
        $validate = $request->validate([
            'brand_model' => 'required',
            'category' => 'required',
            'rental_rate_per_day' => 'required',
            'plate_number' => 'required',
        ]);

        cars::update($validate);

        return redirect('/cars');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cars $cars)
    {
        cars::destroy($cars->id);
        return redirect('/cars');
    }
}
