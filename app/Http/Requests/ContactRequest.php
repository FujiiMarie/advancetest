<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if($this->path()=='/'){
            return true;
        } else {
            return false;
        }
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'fullname' => 'required',
            'gender' => 'required',
            'email' => 'required|email',
            'postcode' => 'numeric',
            'address1' => 'required',
            'opinion' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'fullname.required' => 'お名前を入力してください',
            'gender.required' => '性別を選択してください',
            'email.required' => 'メールアドレスの形式で入力してください',
            'postcode.numeric' => '郵便番号の形式で入力してください',
            'address1.required' => '住所を入力してください',
            'opinion.required' => '120文字以内で入力してください'
        ];
    }
}
