<?php

namespace App\Http\Controllers\Frontend;

use Anhskohbo\NoCaptcha\Facades\NoCaptcha;
use App\Http\Controllers\Controller;
use App\Http\Requests\ConsultanRequest;
use App\Mail\ConsultanMail;
use App\Models\Consultant;
use App\Models\Country;
use App\Models\Education;
use App\Models\Sector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ConsultansController extends Controller
{
  protected $sectors, $countries, $educations;

  public function index()
  {
    $this->countries = Country::all();
    $this->sectors = Sector::all();
    $this->educations = Education::all();

    return view('frontend.consultans', [
      'sectors' => $this->sectors,
      'countries' => $this->countries,
      'educations' => $this->educations
    ]);
  }

  public function store(ConsultanRequest $request)
  {
    $data = $request->validated();
    $response = NoCaptcha::verifyResponse($request->input('g-recaptcha-response'));

//    dd($data);
    if ($response) {
      try {
        $consultant = Consultant::create($data);
        // en el caso de elección de sectores sincronizarlos con la tabla de los mismos en la base de datos
        if ($request->has('sectors')) {
          $consultant->sectors()->sync($request->sectors);
        } else {
          $consultant->sectors()->detach();
        }

        if ($request->has('sectors')) {
          //Sectores seleccionados por el consultor para enviar en el mail
//          dd($consultant->sectors);
//          $consultant['sectors'];
//          dd($request->sectors);
          // Buscar los sectores correspondientes , y ponerlos en un array para listarlos en el mail
          $sectors = Sector::whereIn('id', $request->sectors)->get();
//          dd($sectors);
        } else {
          $sectors = [];
        }
//        $country = Country::where('id', '=', $consultant->nationalityCountry_id)->first();
//        dd($consultant->nationalityCountry_id);
//        dd($consultant->nationality->name);
        $newData = $consultant->load(['nationality', 'residence', 'education'])->toArray();
        // Enviar email configurado en ConsultanMail al usuario con copia oculta al administrador del sitio
//        dd($consultant->name);
        Mail::send(new ConsultanMail($newData, $request->input('email'), $sectors));
        toast('Formulario enviado con éxito', 'success');
        return redirect()->route('consultans');
      } catch (\Throwable $th) {
        dd($th->getMessage());
        toast('No se pudo enviar el formulario', 'error');
        return redirect()->route('consultans');
      }
    } else {
      throw new \Exception('El token no es válido');
    }
  }
}
