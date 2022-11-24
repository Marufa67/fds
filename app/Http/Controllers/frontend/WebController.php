<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebController extends Controller
{
    public function home()
    {
        return view('frontend.pages.home');
    }

    public function register(Request $request)
    {
        User::create([


            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'phone' => $request->number,
            'role' => 'customer'
        ]);
        //dd($request->all()); die;

        return redirect()->back()->with('message', 'registration successful');
    }

    public function login(Request $request)
    {
       
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->except('_token');
        // dd($credentials);
        if (auth()->attempt($credentials)) {
            // dd("true");
            // notify()->success('logged in successfully');
            return redirect()->back();
        }

        return redirect()->back();
        // dd("false");
    }
    public function logout()
    {
        Auth::logout(); 
        return redirect()->back();
    }
}
