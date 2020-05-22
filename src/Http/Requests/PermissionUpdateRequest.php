<?php

namespace Nitseditor\Application\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PermissionUpdateRequest extends FormRequest
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
            'role_id' => 'required',
            'checked' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'role_id.required' => 'Role ID is required',
            'checked.required' => 'Checked true/false is required'
        ];
    }

}
