<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
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
            // 'name' => 'required',
            // 'identify_number' => 'required',
            // 'birth_place' => 'required',
            // 'birth_date' => 'required',
            // 'class' => 'required',
            // 'school' => 'required',
            // 'address' => 'required',
            // 'phone' => 'required',
            // 'avatar' => 'required',
            // 'cv' => 'required',
            // 'self_statement' => 'required',
            // 'parent_statement' => 'required',
            // 'start_date' => 'required',
            // 'finish_date' => 'required',
            // 'major' => 'required',
            // 'internship_type' => 'required',
            // 'division_id' => 'nullable',
            // 'email' => 'required|email', // Here, I've added email validation
            // 'password' => 'required|min:6', // Here, I've added minimum length validation
            // 'confirm_password' => 'required|same:password', // Here, I've added confirmation validation
        ];
    }
}
