<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'nama'=>'required|max:255',
            'deskripsi'=>'required|max:255',
            'harga'=>'required|max:20',
            'stok'=>'required|max:6',
            'diskon'=>'required|max:2',
        ];
    }
}
