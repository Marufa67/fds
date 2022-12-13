<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Delivery_man;
use App\Models\Order;

class DeliveryManController extends Controller
{
    public function list()
    {
        $delivery_man=Delivery_man::all();
        return view('backend.pages.delivery_man.list',compact('delivery_man'));
    }
    public function create()
    {
        return view('backend.pages.delivery_man.create');
    }
    public function post(Request $request)
    {
        // dd($request->all());
        $request->validate([

            // 'delivery_man id' => 'required',
            'name' => 'required',
            'number' => 'required',
            'image' => 'required',
            'area' => 'required',
            'status' => 'required'
   
         ]);

         $fileName = null;
         if ($request->hasFile('image')) {
             // generate name
             $fileName = date('Ymdhmi') . '.' . $request->file('image')->getClientOriginalExtension();
             $request->file('image')->storeAs('/uploads', $fileName);
         }
         Delivery_man::create([
            // 'delivery_man id' => $request->delivery_manid,
            'name' => $request->name,
            'number' => $request->number,
            'image'=>$fileName,
            'area' => $request->area,
            'status' => $request->status
         ]);
         return redirect()->back();
    }
    public function deleteDelivery_man(int $delivery_man_id)
    {
        $test=Delivery_man::find($delivery_man_id);
        if($test)

        {
            $test->delete();
            return redirect()->back()->with('message','delivery_man deleted successfully.');
        }else{
            return redirect()->back()->with('error','delivery_man not found.');
        }
    }
    public function viewDelivery_man(int $delivery_man_id)
    {
        $delivery_man=Delivery_man::find($delivery_man_id);
        $deliveryManDispatchedOrder = Order::where('delivery_man_id',$delivery_man->id)->count();
        $deliveryManDispatchedOrderDetails = Order::where('delivery_man_id',$delivery_man->id)->get();
        // dd($deliveryManDispatchedOrderDetails);
        return view('backend.pages.delivery_man.view',compact('delivery_man','deliveryManDispatchedOrder','deliveryManDispatchedOrderDetails'));

    }
    public function edit($delivery_man_id)
    {
        $delivery_man=Delivery_man::find($delivery_man_id);

        return view('backend.pages.delivery_man.edit',compact('delivery_man'));
    }
    public function update(Request $request,$delivery_man_id)
    {
       
        Delivery_man::create([
            
            // 'delivery_man id' => $request->delivery_manid,
            'name' => $request->name,
            'number' => $request->number,
            'image'=> $request->image,
            'area' => $request->area,
            'status' => $request->status
         ]);
         return redirect()->route('delivery_man.list')->with('message','Update successfully.');
    }
}
