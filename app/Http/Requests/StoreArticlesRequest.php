<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticlesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // questo valore deve essere sempre true
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
       return  [
             'title'=>'required|max:50',
             'content'=> 'required|max:500'
        ];
    }

    public function messages()
    {
    return [
        'title.required'=>'il titolo non è corretto',
            'title.max'=>'il titolo non è corretto',
            'content.required'=>'il contenuto è richiesto',
            'content.max'=>'il contenuto è troppo lungo'
    ];
}
}
