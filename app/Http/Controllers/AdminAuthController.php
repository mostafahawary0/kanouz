<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class AdminAuthController extends Controller
{
    function loginpage()
    {
        
        if (Auth::guard('admin')->check()){
            return redirect(route('homedashboard'));
        }
        return view('dashboard.login');
        
    }

 
    function check(Request $request){
   
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request -> only ('email' , 'password');

        if(Auth::guard('admin')->attempt($credentials)){
            return redirect()->intended(route('homedashboard'));
        }
        return redirect(route('dashboard'))->with("error","login error");
     }


     function logout(){
        Auth::guard('admin')->logout();
        return redirect(route('dashboard'));
     }


}
