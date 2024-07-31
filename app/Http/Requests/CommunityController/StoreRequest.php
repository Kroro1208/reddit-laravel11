<?php

namespace App\Http\Requests\CommunityController;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'unique:communities'],
            'slug' => ['required', 'unique:communities'],
            'description' => ['required', 'min:5', 'max:255']
        ];
    }

    public function attributes(): array
    {
        return [
            'name' => 'コミュニティ名',
            'slug' => '別名',
            'description' => 'コミュニティの概要'
        ];
    }
}
