<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CallRequest extends FormRequest
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
            'name'=>'required|string|max:255',
            'resume'=>'required|string',
            'link'=>'required|url',
            'expiration'=>'required|date',
            'country_id'=>'required|integer',
            'institution_id'=>'required|integer',
            'content'=>'nullable',
            'extended'=> 'nullable|integer',
            'dedication_id'=>'nullable|integer',
            'duration_id' =>'nullable|integer',
            'format_id' =>'nullable|integer',
            'comment' => 'nullable|string',
            'publish'=>'nullable|date',
            'unpublish'=>'nullable|date',
            'state_id'=>'nullable|integer',
        ];
    }

  public function messages()
  {
    return [
      'name.required'=>'El título es obligatorio',
      'resume.required'=>'El resumen es obligatorio',
      'link.required'=>'El link es obligatorio',
      'link.url'=>'La url no es valida',
      'expiration.required'=>'La fecha de cierre es obligatoria',
      'expiration.date'=>'La fecha de cierre no es valida',
      'country_id.required'=>'El país obligatoria',
      'institution_id.required'=> 'El organismo es obligatorio',
    ];
  }
}
