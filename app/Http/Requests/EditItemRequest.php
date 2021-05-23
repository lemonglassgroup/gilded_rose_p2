<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditItemRequest extends FormRequest
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
                'sometimes',
                'required',
                'string',
                'ends_with:_item',
            ],
            'value' => [
                'sometimes',
                'required',
                'numeric',
                'min:10',
                'max:100',
            ],
            'quality' => [
                'sometimes',
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
