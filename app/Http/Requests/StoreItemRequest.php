<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreItemRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize():bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules():array
    {
        return [
            'name' => [
                'required',
                'string',
                'ends_with:_item',
            ],
            'value' => [
                'required',
                'numeric',
                'min:10',
                'max:100',
            ],
            'quality' => [
                'required',
                'integer',
                'min:-10',
                'max:50',
            ],
            'category_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
