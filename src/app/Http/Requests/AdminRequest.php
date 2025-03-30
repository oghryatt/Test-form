<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'gender' => 'nullable|in:male,female,other,all', 
            'type' => 'nullable|string|max:255',
            'date' => 'nullable|date', 
        ];
    }

    public function messages()
    {
        return [
            'email.email' => '正しいメールアドレス形式で入力してください。',
            'gender.in' => '性別は「男性」「女性」「その他」「全て」から選択してください。',
            'date.date' => '日付は正しい形式で入力してください。',
        ];
    }
}
