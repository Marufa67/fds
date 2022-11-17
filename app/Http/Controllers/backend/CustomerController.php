<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function List()
    {

        // $customer = Customer::all();
        $customer = Customer::paginate(2);
        // dd($customer);
        return view('backend.pages.customer.list', compact('customer'));
    }
}
