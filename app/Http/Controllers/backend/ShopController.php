<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\User;


class ShopController extends Controller
{
    public function List(){
        $shops = User::all();
        // dd($shops);
        return view('backend.pages.shop.shops', compact('shops'));
    }
    public function create(){
        // $shop = Shop::all();
        return view('backend.pages.shop.shop_create');
    }
    public function post(Request $request){
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'phone_no' => 'required',
            'image' => 'mimes:jpg,png,jpeg,gif',
            'address' => 'required'
        ]);
        $fileName = NULL;
        if($request->hasFile('image')) {
            $fileName = date('Ymdhmi').$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads', $fileName);
        }
        User::create([
            'name' => $request->name,
            'description' =>  $request->description,
            'phone_no' =>  $request->phone_no,
            'image' => $fileName,
            'address' =>  $request->address,
        ]);
        notify('success', 'successfully added');
        return redirect()->route('shop');
    }

        public function deleteShop(int $shop_id)

   
        {
             // dd($shop_id);
        
            $test=User::find($shop_id);
            if($test)
            {
                $test->delete();
                return redirect()->back()->with('message','shop deleted successfully.');
            }else{
                return redirect()->back()->with('error','shop not found.');
            }
    }
    public function viewShop(int $shop_id)
    {
        
        // $shop=Shop::find($shop_id);
        return view('backend.pages.shop.view',compact(''));

    }
}
