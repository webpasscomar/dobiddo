<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrganismFrontRequest extends FormRequest
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
      'organism' => 'required|min:3|regex:/^[a-zA-ZÀ-ÿ\s]+$/u',
      'fullName' => 'required|min:6|regex:/^[a-zA-ZáéíóúüñÁÉÍÓÚÜÑ\s]+$/',
      'email' => 'required|email|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
      'message' => 'required|min:10',
      'g-recaptcha-response' => 'required|captcha',
    ];
  }

  public function messages()
  {
    return [
      'organism.required' => 'Ingrese un nombre',
      'organism.min' => 'Ingrese al menos 3 caracteres',
      'organism.regex' => 'Ingrese un nombre válido',
      'fullName.required' => 'Ingrese nombre y apellido',
      'fullName.min' => 'Ingrese el menos 6 caracteres',
      'fullName.regex' => 'Ingrese un nombre válido',
      'email.required' => 'Ingrese un correo',
      'email.email' => 'Ingrese un correo válido',
      'email.regex' => 'Ingrese un correo válido',
      'message.required' => 'Ingrese un mensaje (min: 10 caracteres)',
      'message.min' => 'Ingrese el menos 10 caracteres',
      'g-recaptcha-response.required' => 'error de captcha',
      'g-recaptcha-response.captcha' => 'error de captcha'
    ];
  }
}
