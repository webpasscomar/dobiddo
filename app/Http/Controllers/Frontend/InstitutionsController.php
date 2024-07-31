<?php

namespace App\Http\Controllers\Frontend;

use Anhskohbo\NoCaptcha\Facades\NoCaptcha;
use App\Http\Controllers\Controller;
use App\Http\Requests\OrganismFrontRequest;
use App\Mail\OrganismMailReceived;
use App\Mail\OrganismMailSent;
use App\Models\Organism;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Throwable;

class InstitutionsController extends Controller
{
  public function index()
  {
    return view('frontend.institutions');
  }

  public function store(OrganismFrontRequest $request)
  {
    $data = $request->validated();
    $response = NoCaptcha::verifyResponse($request->input('g-recaptcha-response'));

    if ($response) {
      try {
        $organism = Organism::create([
          'organism' => $request->input('organism'),
          'fullName' => $request->input('fullName'),
          'email' => $request->input('email'),
          'message' => $request->input('message'),
        ]);
        // si el proceso se realiza con éxito se envian email correspondientes y mensaje de formulario enviado
        if ($organism) {
          // Enviar correo a los organismos
          Mail::send(new OrganismMailSent($request->input('email'), $request->input('fullName')));
          // Enviar correo a dobiddo con los datos de los postulantes de las convocatorias
          Mail::send(new OrganismMailReceived($data));
          toast('Formulario enviado con éxito', 'success');
          return redirect()->route('institutions');
        };
      } catch (Throwable $th) {
        // dd($th->getMessage());
        toast('No se puedo enviar el formulario', 'error');
        return redirect()->route('institutions');
      }
    } else {
      throw new Exception('El token no es válido');
    }
  }
}
