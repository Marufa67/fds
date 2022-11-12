<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function list(){
        // $ord=Order::all();
        $ord=Order::paginate(2);
        return view('backend.pages.orders.orders',compact('ord'));
    }
    public function create(){
        return view('backend.pages.orders.create');
    }
    public function post(request $request){
        $request->validate(['ordername'=>'required|unique:orders,name']);

        Order::create([
            'name'=>$request->orderName,
            'number'=>$request->orderNumber,
        

        ]);
        return redirect()->back();
    }
    
    
    
}
