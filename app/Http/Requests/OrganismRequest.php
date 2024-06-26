<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrganismRequest extends FormRequest
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
    $put_patch = $this->isMethod('PUT') || $this->isMethod('PATCH');
    $id = $this->route('organism')->id ?? '';

    return [
      'name' => $put_patch ? 'required|string|unique:organisms,name,'.$id.'|max:255' : 'required|string|unique:organisms,name|max:255',
      'initial' => $put_patch ? 'required|string|unique:organisms,initial,'.$id.'|max:15' : 'required|string|unique:organisms,initial|max:15',
      'logo' => $put_patch ? 'image|mimes:jpg,jpeg,png|max:1024' : 'required|image|mimes:jpg,jpeg,png|max:1024',
      'status' => 'integer|between:0,1',
    ];
  }

  public function messages(): array
  {
    return [
      'name.required' => 'El nombre es requerido',
      'name.max' => 'El nombre no puede superar los 255 caracteres',
      'name.unique' => 'El nombre ya existe. Ingrese otro',
      'initial.required'=> 'La sigla es requerida',
      'initial.unique' => 'La sigla ya existe. Ingrese otra',
      'initial.max'=> 'La sigla no puede superar los 15 caracteres',
      'logo.required'=>'El logo es requerido',
      'logo.image' => 'El logo tiene un formato incorrecto',
      'logo.mimes' => 'El logo admite extensiones JPG ó PNG',
      'logo.max' => 'El logo puede tener un tamaño máximo de 1mb',
      'status.integer'=> 'Valor incorrecto de estado',
      'status.between'=> 'Valor incorrecto de estado',
    ];
  }
}
