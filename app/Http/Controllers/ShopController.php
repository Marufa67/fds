<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ShopController extends Controller
{
    public function List(){
        return view('backend.pages.shops');
    }
    public function create(){
        return view('backend.pages.shop.create');
    }
}
