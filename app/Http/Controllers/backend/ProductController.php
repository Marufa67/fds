<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list(){

        $products = Product::paginate(3);
        return view('backend.pages.product.list',compact("products"));
    }

    public function create(){
        return view('backend.pages.product.create');
    }

    public function store(Request $request){
      
        // $request->validate(['product_name' => 'required|unique:products,name']);
        
        
           
            // 'category_id' => 'required',
            // 'name' => 'required',
            // 'description' => 'required',
            // 'image' => 'required',
            // 'price' => 'required|numeric',
            // 'stock' => 'required|numeric',
            // 'stock_status' => 'required|numeric',
        

        $fileName=null;
        if($request->hasFile('image'))
        {
            // generate name
            $fileName=date('Ymdhmi').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads',$fileName);
        }
        
            Product::create([
                'category_id' => $request->category_id,

                'name' => $request->name,
                'description' => $request->description,
                'image' => $fileName,
                'price' => $request->price,
                'stock' => $request->stock,
                'stock_status' => $request->stock_status,
            ]);


            return redirect()->back()->with('message','Product Created Successful.');
        // return redirect()->back();
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
        
        public function viewProduct(int $product_id)
        {

          $product=Product::find($product_id);
          return view('backend.pages.product.view',compact('product'));

        }
        public function edit($product_id)
        {
            $product=Product::find($product_id);

            // $categories=Category::all();

            return view('backend.pages.product.edit',compact('product'));
        }
        public function update(Request $request,$product_id)
        {

        //  dd($request->all());
            Product::find($product_id)->update([
                           'category_id' => $request->category_id,

                           'name' => $request->name,
                           'description' => $request->description,
                           'image' => $request->image,
                           'price' => $request->price,
                           'stock' => $request->stock,
                           'stock_status' => $request->stock_status,
            ]);
    
            return redirect()->route('product.list')->with('message','Update successfully.');
    }
}