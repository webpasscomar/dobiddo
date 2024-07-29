<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConsultanRequest extends FormRequest
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
      'lastname' => 'required|string|min:3|regex:/^[a-zA-ZáéíóúüñÁÉÍÓÚÜÑ\s]+$/',
      'name' => 'required|string|min:3|regex:/^[a-zA-ZáéíóúüñÁÉÍÓÚÜÑ\s]+$/',
      'email' => 'required|email|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/|same:confirmEmail',
      'confirmEmail' => 'required|email|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/|same:email',
      'nationalityCountry_id' => 'required|exists:countries,id',
      'residenceCountry_id' => 'required|exists:countries,id',
      'education_id' => 'required|exists:educations,id',
      'experience' => 'required|integer',
      'linkedin' => 'nullable|url',
      'sectors' => 'required|array',
      'sectors.*' => 'exists:sectors,id',
      'g-recaptcha-response' => 'required|captcha',
    ];
  }

  public function messages()
  {
    return [
      'lastname.required' => 'Ingrese el apellido',
      'lastname.min' => 'Ingrese al menos 3 caracteres',
      'lastname.regex' => 'Ingrese un apellido válido',
      'name.required' => 'Ingrese el nombre',
      'name.min' => 'Ingrese al menos 3 caracteres',
      'name.regex' => 'Ingrese un nombre válido',
      'email.required' => 'Ingrese el email',
      'email.email' => 'Ingrese un email valido',
      'email.regex' => 'Ingrese un email valido',
      'email.same' => 'No coinciden los emails',
      'confirmEmail.required' => 'Ingrese un email',
      'confirmEmail.email' => 'Ingrese un email valido',
      'confirmEmail.regex' => 'Ingrese un email valido',
      'confirmEmail.same' => 'No coinciden los emails',
      'nationalityCountry_id.required' => 'Seleccione la nacionalidad',
      'nationalityCountry_id.exists' => 'No existe la nacionalidad',
      'residenceCountry_id.required' => 'Seleccione la residencia ',
      'residenceCountry_id.exists' => 'No existe la residencia ',
      'education_id.required' => 'Seleccione la educacion',
      'education_id.exists' => 'No existe la educacion',
      'experience.required'=> 'Ingrese los años de experiencia',
      'experience.integer' => 'Valor incorrecto',
      'linkedin.url' => 'Ingrese una URL valida',
      'sectors.required'=>'Ingrese al menos un sector',
      'sectors.exists' => 'Seleccione un sector válido',
      'g-recaptcha-response.required' => 'Captcha requerido',
      'g-recaptcha-response.captcha' => 'Captcha no válido',
    ];
  }
}