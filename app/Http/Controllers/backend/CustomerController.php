<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function List()
    {

        //$customer = Customer::all();
        $customer = Customer::paginate(2);
        //  dd($customer);
        return view('backend.pages.customer.list', compact('customer'));
    }
    public function create()
    {
        return view('backend.pages.customer.create');
    }
    public function post(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'number' => 'required',
            'address' => 'required'

        ]);

        Customer::create([
        'name' => $request->name,
        'user_id' =>auth()->user()->id,
        'number' => $request->number,
        'address' => $request->address,
        ]);
        notify('success', 'successfully added');
      return redirect()->route('customer');
    }


      public function deleteCustomer(int $customer_id)

   
      {
           // dd($customer_id);
      
          $test=Customer::find($customer_id);
          if($test)
          {
              $test->delete();
              return redirect()->back()->with('message','customer deleted successfully.');
          }else{
              return redirect()->back()->with('error','customer not found.');
          }
    }
    public function viewCustomer(int $customer_id)
    {
        $customer=Customer::find($customer_id);
        return view('backend.pages.customer.view',compact('customer'));

    }

}
