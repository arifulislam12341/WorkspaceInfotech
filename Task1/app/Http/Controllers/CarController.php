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
            'founded'=>'required',
            'image'=>'required|mimes:jpg,png,jpeg|max:5048',
            
    
        ],
        [
            'make.required'=>'Please Enter make',
            'founded.required'=>'Please Enter model',
            'image.required'=>'Please Upload jpg,png,jpeg',
            
           
        ]
        );
    $newimage= time() . '-' .$request->make . '.' .
    $request->image->extension();

    $request->image->move(public_path('images'),$newimage);

        $car=new Car();
     
        $car->make =$request->make;
        $car->founded=$request->founded;
        $car->image=$newimage;
       
        $car->save();
        return redirect()->route('carinfo');
    }
    public function carinfo(){
   
       
        $keys =Car::all();
     
     return view("car.carinfo")->with('keys', $keys);
       
     
        
    }
    public function carUpdate($id){
        $car =Car ::where('id', $id)->first();
        return view('car.carUpdate')->with('car', $car);
       // return $car;
       }
    
       public function carUpdateSubmit(Request $request){
       
           $car =Car ::where('id', $request->id)->first();
           
         
       
      
       
           $car->make =$request->make;
           $car->founded=$request->founded;

           $newimage= time() . '-' .  $request->make . '.' .
           $request->image->extension();
           $request->image->move(public_path('images'),$newimage);
           $car->image=$newimage;

           $car->save();
         return redirect()->route("carinfo");
     
     }
    public function carDelete(Request $request){
       
        $car =Car ::where('id', $request->id)->first();
        
        $car->delete();
         return redirect()->route('carinfo');
     
    
    }
}
