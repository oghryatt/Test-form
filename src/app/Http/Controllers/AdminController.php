<?php
namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest; 
use App\Models\Inquiry;

class AdminController extends Controller
{
    public function index(AdminRequest $request) 
    {
        
        $query = Inquiry::query();

        if ($request->filled('name')) {
            $query->where('name', 'like', '%' . $request->name . '%');
        }
        if ($request->filled('email')) {
            $query->where('email', 'like', '%' . $request->email . '%');
        }
        if ($request->filled('gender') && $request->gender !== 'all') {
            $query->where('gender', $request->gender);
        }
        if ($request->filled('type')) {
            $query->where('type', $request->type);
        }
        if ($request->filled('date')) {
            $query->whereDate('created_at', $request->date);
        }

    
        $inquiries = $query->paginate(7);

        return view('admin', compact('inquiries'));
    }

    
}
