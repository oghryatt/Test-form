<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
  public function Register()
  {
    return view('Register');
  }
  public function store(Request $request)
    {
        // リクエストデータのバリデーション
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        // ユーザー登録処理
        $user = \App\Models\User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        // レスポンス
        return redirect('/login')->with('success', '登録が成功しました！');
    }
}


