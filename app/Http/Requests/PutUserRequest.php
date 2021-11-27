<?php

namespace App\Http\Requests;

use App\Exceptions\Users\UserException;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class PutUserRequest extends FormRequest
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
            'user_name' => 'nullable|max:25',
            'first_name' => 'nullable|max:45',
            'second_name' => 'nullable|max:45',
            'first_last_name' => 'nullable|max:45',
            'second_last_name' => 'nullable|max:45',
            'email' => 'nullable|email',
            'cellphone' => 'nullable|max:12',
            'country_id' => 'nullable|integer'
        ];
    }

    protected function failedValidation(Validator $validator) {
        throw new UserException($validator->errors(), 422);
    }
}
