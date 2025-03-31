<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConfirmRequest;
use App\Models\Category;
use App\Models\confirm;

class ConfirmController extends Controller
{
    public function index()
{
    $contacts = Contact::with('category')->latest()->paginate(10); 
    return view('contact.index', compact('contacts'));
}

    
    
    
    public function create()
    {
        $categories = Category::all();
    }

    public function confirm(ConfirmRequest $request)
    {
        $validated = $request->validated();
        return view('contacts.confirm', compact('validated'));
        
    }

    public function store(ConfirmRequest $request)
    {
        
    }


 public function thanks()
    {
        return view('contact.thanks');
    }


}
