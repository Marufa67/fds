<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function List(){
        
        $customer_list=Customer::all();
        // dd($cats);
        

        return view('backend.pages.customer.create',compact('customer_list'));
    }

    public function create(){
        return view('backend.pages.customer.create');
    }
    public function post(Request $request){
        //dd($request->all());
        Customer::create([
            'name'=>$request->name,
            'number'=>$request->number,
            'address'=>$request->address,

    

        ]);

        return redirect()->back();
    }




}
