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
    return view('contacts.index', compact('contacts'));
}

    
    
    
    public function create()
    {
        $categories = Category::all();
        return view('contacts.create', compact('categories'));
    }

    public function confirm(ContactRequest $request)
    {
        $validated = $request->validated();
        return view('contacts.confirm', compact('validated'));
        
    }

    public function store(ContactRequest $request)
    {
        Contact::create($request->validated());
        return redirect()->route('contacts.create')->with('message', 'お問い合わせが送信されました');
    }


 public function thanks()
    {
        return view('contacts.thanks');
    }


}
