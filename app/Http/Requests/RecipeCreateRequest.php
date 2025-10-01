<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class RecipeCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Prepare the data for validation.
     */
    protected function prepareForValidation(): void
    {
        // Normalize "diet_preferences" (string → array)
        if ($this->has('diet_preferences') && is_string($this->input('diet_preferences'))) {
            $this->merge([
                'diet_preferences' => json_decode($this->input('diet_preferences'), true),
            ]);
        }
    }

    protected function failedValidation(Validator $validator)
    {
        // Instead of redirecting with the default "errors" bag,
        // we push everything into our custom "toast"
        throw new HttpResponseException(
            redirect()->back()->with('toast', [
                'title' => 'Validation Failed!',
                'type' => 'error',
                'description' => $validator->errors()->all(), // array of messages
            ])
        );
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category_id' => 'required|uuid|exists:recipe_categories,id',
            'difficulty_level_id' => 'required|uuid|exists:difficulty_levels,id',
            'ingredients' => 'nullable|string',
            'instructions' => 'nullable|string',
            'prep_time' => 'nullable|integer',
            'cook_time' => 'nullable|integer',
            'servings' => 'nullable|integer',
            'image' => 'nullable|file|image|max:2048', // better for uploads

            // nutrition
            'calories' => 'nullable|integer',
            'protein' => 'nullable|integer',
            'carbohydrates' => 'nullable|integer',
            'fat' => 'nullable|integer',
            'fiber' => 'nullable|integer',

            // diet preferences
            'diet_preferences' => 'nullable|array',
            'diet_preferences.*' => 'uuid|exists:dietary_preferences,id',
        ];
    }
}
