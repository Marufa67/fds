<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login()
    {
        return view('backend.pages.login');
    }
    public function doLogin(Request $request)
    {

        $credentials=$request->except('_token');
        // dd($credentials);
//        $credentials=$request->only(['email','password']);
        
        if(Auth::attempt($credentials))
        {
            return redirect()->route('dashboard');

        }
        // dd("false");
        return redirect()->back()->with('message','invalid credentials');

    }
    public function logout()
    {
        Auth::logout();
        return redirect()->back()->with('message','Logout successful.');
    }
    
}




        

