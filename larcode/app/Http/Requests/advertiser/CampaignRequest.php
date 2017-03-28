<?php

namespace App\Http\Requests\advertiser;

use Illuminate\Foundation\Http\FormRequest;

class CampaignRequest extends FormRequest
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
            'name' => 'required|max:30',
            'description' => 'required',
        ];
    }
    public function messages()
    {
        return [
            //'name.required' => ':attribute is required',
        ];
    }

    public function attributes()
    {
        return[
            //'name' => 'NAMEEEEEE', 
        ];

    }
}
