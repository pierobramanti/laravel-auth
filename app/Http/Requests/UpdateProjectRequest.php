<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|max:255',
            'description' => 'nullable|string',
            'date' => 'required|date',
            'image'=>'nullable|image|max:4084'
        ];
    }

    public function messages(){
        return[
            'title.required' => 'Il titolo è obbligatorio.',
            'title.max' => 'Il titolo non può superare i 255 caratteri.',
            
            'date.required' => 'La data è obbligatoria.',
            'date.date' => 'La data deve essere in un formato valido.',
            'image.image'=>'il file deve essere un\'immagine.',
            'image.max'=>'il file deve essere grande al massimo :max kb'
        
        ];
    }
}
