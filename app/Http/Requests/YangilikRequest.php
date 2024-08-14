<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class YangilikRequest extends FormRequest
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
            'title'=>'required|min:5',
            'news'=>'required'
        ];
    }
    public function messages() 
    {
        return [
            'name.required'=>'Name ustuni to\'ldirilsin',
            'title.required'=>'Title ustuni to\'ldirilsin',
            'title.min'=>'Kamida 5 ta belgidan iborat b\'lishi kerak!',
            'news.required'=>'News ustunini to\'ldiring!',
        ];
    }
}
