<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConfirmRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'last_name' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'gender' => 'required|in:male,female,other',
            'email' => 'required|email',
            'phone' => 'required|numeric|digits_between:5,10',
            'address' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'content' => 'required|string|max:120',
        ];
    }

    public function messages()
    {
        return [
            'last_name.required' => '姓を入力してください',
            'first_name.required' => '名を入力してください',
            'gender.required' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'phone.required' => '電話番号を入力してください',
            'phone.numeric' => '電話番号は半角数字で入力してください',
            'phone.digits_between' => '電話番号は5桁までの数字で入力してください',
            'address.required' => '住所を入力してください',
            'category_id.required' => 'お問い合わせの種類を選択してください',
            'content.required' => 'お問い合わせ内容を入力してください',
            'content.max' => 'お問合せ内容は120文字以内で入力してください',
            'email.email' => 'メールアドレスはメール形式で入力してください',
        ];
    }
}


