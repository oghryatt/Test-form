<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create(LoginRequest $request)
    {
        return view('login');
    }

    public function store(LoginRequest $request)
    {
        $contact=$request->only(['email', 'password']); {
            return compact('/Admin');
        }

    }
}
