<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Route;
use Session;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function signin(){
        return view('admin.signin');

    }

    public function signinSubmit(Request $request){
      
        $validate=$request->validate(
            [
                
             
                'email'=>'required',
                'password'=>'required',
        
            ],
            [
                
               
                
                'email.required'=>'Please enter your email',
                'password.required'=>'Please enter your password',
            ]
            );
            $admin=Admin::where("email",$request->email)
                ->first();
        
                if (Hash::check($request->password,$admin->password)){
                    $request->session()->put("id",$admin->id); 
                    $request->session()->put("pass",$request->password); 
                    if ($request->remember) {
                        setcookie('remember',$request->email, time()+36000);
                        Cookie::queue('name',$admin->email,time()+60);
                    }else{
                        setcookie('remember',"");
                        Cookie::queue('name',"");
                    }
                    return redirect()->route("dashboard");
                    
                }
        
                return back();
       
                }
    

    public function dashboard(){
        $id=Session::get("id");
        $keys =Admin::where("id",$id)->first();
        $keys->password=Session::get("pass");
        return view("admin.dashboard")->with('keys', $keys);
       

    }
    public function Logout(){
        session()->forget('id');
        session()->forget('pass');
        return redirect()->route('signin');
    }
}