<?php

namespace App\Http\Controllers;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    //
    public function carCreate(){
        return view("car.carCreate");


    }
    public function carCreateSubmit(Request $request)
    {
        $validate=$request->validate(
        [
            'make'=>'required|min:3|max:100',
            'model'=>'required',
            'vin'=>'required',
            'price'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'image'=>'required',
            
    
        ],
        [
            'make.required'=>'Please Enter make',
           
            'model.required'=>'Please Enter model',
            'vin.required'=>'Please Enter vin',
            'price.required'=>'Please Enter price',
            'image.required'=>'Please Enter image url',
            
           
        ]
        );
    
        $car=new Car();
     
        $car->make =$request->make;
        $car->model=$request->model;
        $car->vin=$request->vin;
        $car->price=$request->price;
      
        $car->image=$request->image;
       
        $car->save();
        return redirect()->route('carinfo');
    }
}
