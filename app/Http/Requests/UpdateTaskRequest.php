<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateTaskRequest extends FormRequest
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
            'id' => 'required',
            'title' => ['required', 'string', 'min:4', 'unique:tasks', Rule::unique('tasks')->ignore($this->id)],
            'description' => 'sometimes|string|max:2000',
            'completed' => 'required|boolean'
        ];
    }
}
