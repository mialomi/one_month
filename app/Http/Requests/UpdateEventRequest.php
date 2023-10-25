<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEventRequest extends FormRequest
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

            'seasons_id' => 'required',
            'collections_id' => 'required',
            'places_id' => 'required',
            'date_time' => 'required|date',
            'online_events' => 'nullable|integer',
            'location'  => 'string|max:30',
            'spendings' => 'nullable|numeric',
            'earnings' => 'nullable|numeric',
    
        ];
    }

    public function messages(): array{
        return [
            
            'seasons_id.required' => 'Choose a season from the list!',
            'collections_id.required' => 'Choose a collection from the list!',
            'places_id.required' => 'Choose the city where the show will take place!',
            'spendings.numeric' => 'Hey, this is not a number!',
            'earnings.numeric' => 'Hey, this is not a number!',
            'date_time.required' => 'The when is crucial for the show!',
            'location.required_if' => 'Is it a building, museum, square... where?',


        ];
    }
}
