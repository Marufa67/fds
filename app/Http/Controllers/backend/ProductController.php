<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list(){

        $products = Product::all();
        return view('backend.pages.product.list',compact("products"));
    }
    public function create(){
        return view('backend.pages.product.create');
    }
    public function store(Request $request){
        // dd($request->all());
        Product::create([
            // 'database column name' => $request=>input name
            'category_id' => $request->category_id,
            'name' => $request->name,
            'description' => $request->description,
            'image' => $request->image,
            'price' => $request->price,
            'stock' => $request->stock,
            'stock_status' => $request->stock_status
        ]);
        return redirect()->back();
        // return redirect()->route('product.list');
    }


    public function deleteProduct(int $product_id)
    {
        // dd($product_id);
    
        $test=Product::find($product_id);
        if($test)
        {
            $test->delete();
            return redirect()->back()->with('message','product deleted successfully.');
        }else{
            return redirect()->back()->with('error','product not found.');
        }
        


        }
    }