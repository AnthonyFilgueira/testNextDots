<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PropertyRequest extends Request
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
            'title'       => 'required|max:255',
            'address'     => 'required|max:255',
            'town'        => 'required|max:255',
            'county'      => 'required|max:255',
            'country'     => 'required|max:255',
            'state_id'    => 'required|exists:states,id',
            'description' => 'max:400',
            ];
    
    }
}
