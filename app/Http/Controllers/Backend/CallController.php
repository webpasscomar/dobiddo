<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CallRequest;
use App\Models\Call;
use App\Models\Country;
use App\Models\Dedication;
use App\Models\Duration;
use App\Models\Format;
use App\Models\Institution;
use App\Models\Sector;
use App\Models\State;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Mews\Purifier\Facades\Purifier;
use RealRashid\SweetAlert\Facades\Alert;

class CallController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  /**
   * Display a listing of the resource.
   */
  public function index(): View
  {
    $sectors = Sector::all();
    $calls = Call::all();
    return view('backend.calls.index', [
      'calls' => $calls,
      'sectors' => $sectors,
    ]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create(): View
  {
    $states = State::all();
    $institutions = Institution::all();
    $countries = Country::orderBy('name', 'asc')->get();
    $dedications = Dedication::all();
    $formats = Format::all();
    $durations = Duration::all();

    return view('backend.calls.create', [
      'preview' => false,
      'states' => $states,
      'institutions' => $institutions,
      'countries' => $countries,
      'dedications' => $dedications,
      'formats' => $formats,
      'durations' => $durations,
    ]);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(CallRequest $request): RedirectResponse
  {
    $request->validated();
    $publish = null;
    $unpublish = null;

    // Se limpian los datos ingresados con texto enriquecido con la libreira mews/purifier
    $clean_resume = Purifier::clean($request->input('resume'));
    $clean_content = Purifier::clean($request->input('content'));

    // Comprobar el estado de la convocatoria y poner la fecha ségun si fue publicada ó despublicada
    $state = $request->input('state_id');
    if ($state == 2) {
      $publish = now()->format('Y-m-d');
    } else if ($state == 4) {
      $unpublish = now()->format('Y-m-d');
    }
    try {
      Call::create([
        'name' => $request->input('name'),
        'resume' =>  $clean_resume,
        'content' => $clean_content,
        'link' => $request->input('link'),
        'expiration' => $request->input('expiration'),
        'extended' => $request->input('extended'),
        'country_id' => $request->input('country_id'),
        'institution_id' => $request->input('institution_id'),
        'dedication_id' => $request->input('dedication_id'),
        'duration_id' => $request->input('duration_id'),
        'format_id' => $request->input('format_id'),
        'comment' => $request->input('comment'),
        'publish' => $publish,
        'unpublish' => $unpublish,
        'state_id' => $request->input('state_id'),
      ]);

      Alert::success('Convocatoria creada', 'La convocatoria ha sido creada con éxito');
      return redirect()->route('convocatorias.index');
    } catch (\Throwable $th) {
      //          dd($th->getMessage());
      Alert::error('Proceso incorrecto', 'No se pudo crear la convocatoria');
      return redirect()->route('convocatorias.index');
    }
  }

  /**
   * Display the specified resource.
   */
  public function show(Call $call): View
  {
    return view('backend.calls.show', [
      'preview' => true,
      'call' => $call,
      'states' => State::all(),
      'institutions' => Institution::all(),
      'countries' => Country::all(),
      'formats' => Format::all(),
      'durations' => Duration::all(),
      'dedications' => Dedication::all(),
    ]);
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Call $call): View
  {
    $states = State::all();
    $institutions = Institution::all();
    $countries = Country::all();
    $dedications = Dedication::all();
    $formats = Format::all();
    $durations = Duration::all();
    return \view('backend.calls.edit', [
      'preview' => false,
      'call' => $call,
      'states' => $states,
      'institutions' => $institutions,
      'countries' => $countries,
      'dedications' => $dedications,
      'formats' => $formats,
      'durations' => $durations,
    ]);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(CallRequest $request, Call $call): RedirectResponse
  {

    $request->validated();
    // Comprobar el estado de la convocatoria y poner la fecha ségun si fue publicada ó despublicada
    $state = $request->input('state_id');
    if ($state == 2) {
      $publish = now()->format('Y-m-d');
      $unpublish = $call->unpublish;
    } else if ($state == 4) {
      $publish = $call->publish;
      $unpublish = now()->format('Y-m-d');
    } else {
      $publish = $call->publish;
      $unpublish = $call->unpublish;
    }

    // Se limpian los datos ingresados con texto enriquecido con la libreira mews/purifier
    $clean_resume = Purifier::clean($request->input('resume'));
    $clean_content = Purifier::clean($request->input('content'));


    try {
      // Actualizar la convocatoria
      $call->updateOrFail([
        'name' => $request->input('name'),
        'resume' => $clean_resume,
        'content' => $clean_content,
        'link' => $request->input('link'),
        'expiration' => $request->input('expiration'),
        'extended' => $request->input('extended'),
        'country_id' => $request->input('country_id'),
        'institution_id' => $request->input('institution_id'),
        'dedication_id' => $request->input('dedication_id'),
        'duration_id' => $request->input('duration_id'),
        'format_id' => $request->input('format_id'),
        'comment' => $request->input('comment'),
        'publish' => $publish,
        'unpublish' => $unpublish,
        'state_id' => $request->input('state_id'),
      ]);

      Alert::success('Convocatoria actualizada', 'La convocatoria ha sido actualizada con éxito');
      return redirect()->route('convocatorias.index');
    } catch (\Throwable $th) {
      //        dd($th->getMessage());
      Alert::error('Proceso incorrecto', 'No se pudo actualizar la convocatoria');
      return redirect()->route('convocatorias.index');
    }
  }

  // Actualizar el valor de los sectores
  public function updateSectors(Request $request, Call $call)
  {
    $request->validate([
      'sectors' => 'nullable|array',
      'sectors.*' => 'exists:sectors,id',
    ]);
    try {
      // Si hay sectores vincular el correspondiente
      if ($request->has('sectors')) {
        $call->sectors()->sync($request->input('sectors'));
      } else {
        // sino desvincular todos
        $call->sectors()->detach();
      }
      Alert::success('Proceso correcto', 'Las incumbencias han sido actualizadas con éxito');
      return redirect()->route('convocatorias.index');
    } catch (\Throwable $th) {
      //      dd($th->getMessage());
      Alert::error('Proceso incorrecto', 'No se pudo actualizar las incumbencias');
      return redirect()->route('convocatorias.index');
    }
  }
  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Call $call)
  {
    //
  }
}
