<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use App\Models\Product;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebController extends Controller
{
    public function home()
    {
        $shops = User::all();
       $category = Category::all();
       $product = Product::all();
        return view('frontend.pages.home', compact('shops','category','product'));
    }

    public function register(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'phone_no' => $request->number,
            'role' => 'customer'
        ]);
        // dd($request->all());
        notify()->success('registration in successfully');

        return redirect()->back();
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
             notify()->success('logged in successfully');
            return redirect()->back();
        }

        return redirect()->back();
        // dd("false");
    }
    public function logout()
    {
        Auth::logout(); 
        notify()->success('logout in successfully');
        return redirect()->back();
    }
    public function registration(request $request)
    {
        // dd($request->all());
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'phone_no' => $request->number,
            'description' => $request->description,
            'image' => $request->image,
            'address' => $request->address,
            'role' => 'shop'
        ]);
        // dd("success");
        return redirect()->back();
    }
    public function profile()
    {
        return view('frontend.pages.profile.profile');
    }

    public function updateProfile(Request $request)
    {
               //validation

               $user=User::find(auth()->user()->id);
               $user->update([
                  'name'=>$request->user_name,
                  'address'=>$request->user_address,
                  'mobile'=>$request->user_mobile,
               ]);
       
               notify()->success('User profile updated.');
               return redirect()->back();
    }
    
}
