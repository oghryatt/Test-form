<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

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
