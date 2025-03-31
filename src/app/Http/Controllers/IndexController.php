<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
     public function index()
    {
        $categories = Category::all();
        return view('index',compact('categories'));
    }
    public function store(ConfirmRequest $request)
    {
        $data = $request->validated();
        return view('confirm');
    }

}
