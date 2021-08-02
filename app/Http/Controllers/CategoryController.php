<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Category;


use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function product()
    {
       $categories=Category::all();
       return view('pro',compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_category' => 'required|min:7',
            'name' => 'required',
        ]);
    }
}
