<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StockRequest extends FormRequest
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
            //
            'quantité' => ['required'],
            'pri_ve_min' => ['required'],
            'nomarticle' => 'required|unique:stocks,nom_article,',

        ];
    }
    public function messages()
    {
        return [
            'quantité.required' => 'Please this field has to be filled',
            'pri_ve_min.required' => 'Please this field has to be filled ',
            'nomarticle.required' => 'Please this field has to be filled',
            'nomarticle.unique' => 'This article is not finish check, edit it on the list',
        ];
    }
}
