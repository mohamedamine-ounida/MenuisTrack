<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class cmdRequest extends FormRequest
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
            'type'=>'required',
            'longueur'=>'required|min:0|max:4',
            'largeur'=>'required|min:0|max:4',
            'hauteur'=>'required|min:0|max:4',
            'couleur'=>'required',
            'qualite'=>'required',
        ];
    }
}
