<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ShopController extends Controller
{
    public function List(){
        return view('backend.pages.shop.shops');
    }
}
