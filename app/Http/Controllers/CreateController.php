<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Order;

class CreateController extends Controller
{
    public function list()
    {
        $ord=Order::all();//select * from categories;
//        dd($cats);
        return view('backend.pages.category.list',compact('ord'));
    }
    public function create() {
        return view('backend.pages.create');
    }
    public function post(Request $request)
    {
//        dd($request->all());
        Order::create([
            //database column name => input field name
                'name'=>$request->orderName,
                'password'=>$request->password,
                'description'=>$request->description
        ]);

//        return redirect()->route('order.list');
        return redirect()->back();

    }
    
}
