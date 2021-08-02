<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProController extends Controller
{
    public function pro()
    {
        $categories=Category::all();

       return view('pro',compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|min:7',
            'name' => 'required',
            'color' => 'required',
        ]);
    }
}
