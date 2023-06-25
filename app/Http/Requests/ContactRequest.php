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
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return[
            "name"=>'required',
            "email"=>'required|email',
            "subject" => 'required|min:5|max:50',
            "message"=>'required|min:5|max:500',
            'image' => 'required'
        ];
    }
//with=>/.+@.+\..+/i
   /* public function attributes (){
        return[
            'name'=>'имя'
        ];--- Змінює тільки ім'я атрибуту
    }*/
    public function messages(){
        return[
            'name.required'=>"Поле ім'я обов'язкове",
            'email.required'=>"Поле email обов'язкове",
            'email.with=>/.+@.+\..+/i'=>'Не правильний email',
            'subject.required'=>"Поле заголовок обов'язкове",
            'message.required'=>"Поле сообщение обов'язкове"
        ];//- Змінює весь текст помилки 
    }
}
