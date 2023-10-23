<?php

namespace App\Http\Requests;

use App\Http\Controllers\BrandController;
use App\Models\Brand;
use Illuminate\Foundation\Http\FormRequest;

class BrandRequest extends FormRequest
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
        $year = date('Y');
        return [

        'brand_name' => 'required|string',
        'creative_director' => 'required|string|max:40',
        'headquarters' => 'required|string|max:40',
        'established_year' => 'required|numeric|digits:4|gte:1800|lte:'.$year,
        'website' => 'required|active_url',
        'image_logo' => 'nullable|string|max:255',
        ];
    }

    public function messages(): array{

        return [
            'brand_name.required'=> 'The name of the brand is essential!',
            'creative_director.required'=> 'The brain behind the brand is essential!',
            'headquarters.required'=> 'The where is essential!',
            'established_year.required'=> 'The when is also essential!',
            'established_year.numeric'=> 'Hey! This is not a year!', 
            'established_year.digits'=> 'Hey! What era is this?',
            'established_year.gte'=> 'Hey! What era is this?',
            'established_year.lte'=> 'Hey! Can you guess the future?',
            'website.required'=> 'Hey! The new where is essential!',
            'website.active_url'=> 'Hey! wwwhat is this?'

        ];
    }
}
