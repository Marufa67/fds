<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use App\Models\Delivery_man;



class OrderController extends Controller
{
   public function list()
   {

      $orders = Order::all();

      return view('backend.pages.order.list', compact('orders'));
   }
   public function create()
   {
      $customers = Customer::get();
      $products = Product::get();
      $delivery_men = Delivery_man::get();
      return view('backend.pages.order.create', compact('customers', 'products', 'delivery_men'));
   }
   public function post(Request $request)
   {
      $request->validate([

         'customer_id' => 'required',
         'product_id' => 'required',
         'delivery_man_id' => 'required',
         'expected_delivery_date' => 'required',
         'product_price' => 'required',
         'shipping_price' => 'required',
         'total_price' => 'required'

      ]);
      Order::create([
         'customer_id' => $request->customer_id,
         'product_id' => $request->product_id,
         'delivery_man_id' => $request->delivery_man_id,
         'expected_delivery_date' => $request->expected_delivery_date,
         'product_price' => $request->product_price,
         'shipping_price' => $request->shipping_price,
         'total_price' => $request->total_price
      ]);
      notify('success', 'successfully added');
      return redirect()->route('orders.list');
   }
   public function deleteOrder(int $order_id)
   {
      // dd($order_id);

      $test = Order::find($order_id);
      if ($test) {
         $test->delete();
         return redirect()->back()->with('message', 'order deleted successfully.');
      } else {
         return redirect()->back()->with('error', 'order not found.');
      }
   }
   public function viewOrder($order_id)
   {

      $order = Order::find($order_id);
      return view('backend.pages.order.view', compact('order'));
   }
   public function edit($order_id)
   {
      $order = Order::find($order_id);
      $customers = Customer::get();
      $products = Product::get();
      $delivery_men = Delivery_man::get();

      return view('backend.pages.order.edit', compact('order', 'customers', 'products', 'delivery_men'));
   }
   public function update(Request $request, $order_id)
   {
      Order::find($order_id)->update([
         'customer_id' => $request->customer_id,
         'product_id' => $request->product_id,
         'delivery_man_id' => $request->delivery_man_id,
         'expected_delivery_date' => $request->expected_delivery_date,
         'product_price' => $request->product_price,
         'shipping_price' => $request->shipping_price,
         'total_price' => $request->total_price
      ]);
      return redirect()->route('orders.list')->with('message', 'Update successfully.');
   }
}
