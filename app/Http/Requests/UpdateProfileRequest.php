<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
{

    public function rules(): array
    {
        $userId = auth()->user()->id;
        return [
            'name' => 'required|min:6|max:255',
            'email'=> [  'required','email',
        Rule::unique('users')->ignore($userId)],
            'state_id' => 'required|numeric|exists:states,id'
        ];
    }
}
