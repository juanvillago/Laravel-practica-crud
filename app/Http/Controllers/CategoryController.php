<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
    
        $category = Category::get();
    return view('category.index', compact('category'));
    }

    public function create()
    {
        return view('category/create');
    }

    public function store(Request $request){
        $request->validate( [
            'name'=> 'required|string',
            'description'=> 'required|max:255|string',
            'Inactive'=> 'sometimes',
        ]
    );

            Category::create([
            'name' => $request->name,
            'description' => $request->description,
            'Inactive'=> $request->Inactive == true ? 1:0,
            ]);
            return redirect('category/create')->with('status','Category created successfully');
    }
   
}
