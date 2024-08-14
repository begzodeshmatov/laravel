<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ElonRequest extends FormRequest
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
            'name'=>'required',
            'surname'=>'required|min:5',
            'news'=>'required',
            'file'=>'required',
            'image'=>'required'
        ];
    }
    public function messages() 
    {
        return [
            'name.required'=>'Name ustuni to\'ldirilsin',
            'surname.required'=>'Surname ustuni to\'ldirilsin',
            'surname.min'=>'Kamida 5 ta belgidan iborat bo\'lishi kerak!',
            'news.required'=>'News ustuni to\'ldirilsin!',
            'file.required'=>'Fayl yuklang!',
            'image.required'=>'Fayl yuklang!',

        ];
    }
}
