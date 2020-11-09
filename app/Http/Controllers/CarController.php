<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function viewCar(){
        $car = Car::orderBy('created_at', 'DESC')->get();
        return view('all-car')->with('car', $car);
    }
    public function editCar(Request $request){
       $car = Car::where('id', $request->car_id)->first();
       return view('edit-car')->with('car', $car);

    }
    public function updateCar(Request $request){
        $car = Car::where('id', $request->car_id)->update([
            'name' => $request->name,
            'make' => $request->make,
            'model' => $request->model,
            'license_number' => $request->license_number,
            'weight' => $request->weight,
            'registration_year' => $request->registration_year,
        ]);
        return redirect('/car/all');
    }
    public function addCar(Request $request){
        $car = new Car();
        $car->name = $request->name;
        $car->make = $request->make;
        $car->model = $request->model;
        $car->license_number = $request->license_number;
        $car->weight = $request->weight;
        $car->registration_year = $request->registration_year;
        $car->save();
        return redirect('/car/all');

    }
    
    public function deleteCar(Request $request){
        Car::where('id', $request->car_id)->delete();
        return redirect('/car/all');
    }
    
}
