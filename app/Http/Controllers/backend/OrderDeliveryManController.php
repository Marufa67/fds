<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class OrderDeliveryManController extends Controller
{
    public function list()
    {
        
        return view('backend.pages.order_delivery_man.list');
    }

    public function create()
    {
        return view('backend.pages.order_delivery_man.create');
    }
    public function post(Request $request)
{
    
}
}
