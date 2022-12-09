<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // List all cars in the database
        $cars = DB::table('cars')->get();

        return view('index', ['cars'=>$cars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('car.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validation
        $this->validate($request, [
            'brand'=>'required|max:255',
            'model'=>'required|max:255',
            'license'=>'required|unique:cars,license_plate|max:255',
            'engine_capacity'=>'required',
            'color'=>'required'
        ]);

        // store validated car
        Car::create([
            'brand' => $request->brand,
            'model' => $request->model,
            'license_plate' => $request->license,
            'engine_capacity' => $request->engine_capacity,
            'color' => $request->color,
        ]);  

        return view('all_cars');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Show the specific car with the ID provided.
        $car = DB::table('cars')->find($id);
        return view('car.show' , ['car'=>$car]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car::find($id);

        return view('edit' , ['car'=>'$car']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
            // $
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Method to delete a record
        Car::findOrfail($id)->delete();
        return back();
    }
}
