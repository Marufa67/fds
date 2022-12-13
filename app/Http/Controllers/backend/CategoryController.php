<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function list()
    {
        //select * from categories;
        // $cats=Category::all();
        //        dd($cats);
        $cats = Category::paginate(2);
      
        return view('backend.pages.category.list', compact('cats'));
    }


    public function create()
    {
        return view('backend.pages.category.create');
    }

    public function store(Request $request)
    {
        $request->validate(['category_name' => 'required']);

        $fileName = null;
        if ($request->hasFile('image')) {
            // generate name
            $fileName = date('Ymdhmi') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads', $fileName);
        }


        //    dd($request->all());
        Category::create([

            //database column name => input field name
            'name' => $request->category_name,
            'description' => $request->description,
            'image' => $fileName,

        ]);

        //        return redirect()->route('category.list');
        return redirect()->back();
    }

        public function deleteCategory(int $category_id)

   
        {
             // dd($category_id);
        
            $test=Category::find($category_id);
            if($test)
            {
                $test->delete();
                return redirect()->back()->with('message','category deleted successfully.');
            }else{
                return redirect()->back()->with('error','category not found.');
            }
   
        }
        public function viewCategory(int $category_id)
        {
            $category=Category::find($category_id);
            return view('backend.pages.category.view',compact('category'));
  
        }

    }
