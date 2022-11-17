<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
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
        $request->validate(['category_name' => 'required|unique:categories,name']);

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
}
