<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use App\Models\Call;
use App\Models\Country;
use App\Models\Institution;
use App\Models\Dedication;
use App\Models\Duration;
use App\Models\Format;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CallsController extends Controller
{
  public function index(Request $request)
  {
    // $query = Call::query();

    // if ($request->has('search')) {
    //     $search = $request->input('search');
    //     $query->where(function ($q) use ($search) {
    //         $q->where('name', 'like', '%' . $search . '%')
    //             ->orWhere('resume', 'like', '%' . $search . '%');
    //     });
    // }

    // if ($request->has('country_id')) {
    //     $query->where('country_id', $request->input('country_id'));
    // }

    // if ($request->has('institution_id')) {
    //     $query->where('institution_id', $request->input('institution_id'));
    // }

    // if ($request->has('dedication_id')) {
    //     $query->where('dedication_id', $request->input('dedication_id'));
    // }

    // if ($request->has('duration_id')) {
    //     $query->where('duration_id', $request->input('duration_id'));
    // }

    // if ($request->has('format_id')) {
    //     $query->where('format_id', $request->input('format_id'));
    // }

    // $calls = $query->paginate(5);


    // búsqueda de convocatorias por nombre, resumen, contenido, pais y formato
    // pasamos filters al front para saber si se hizo una busqueda y mostrar el botón de reset en caso de haya filtros aplicados
    $filters = $request->only(['search', 'country_id', 'format_id']);
    $query = Call::query();

    // Aplicar filtros según los campos a filtrar
    // filtro por nombre y resumen
    if (!empty($filters['search'])) {
      $query->where(function ($q) use ($filters) {
        $q->where('name', 'like', '%' . $filters['search'] . '%')
          ->orWhere('resume', 'like', '%' . $filters['search'] . '%');
      });
    };

    //Filtro por paises
    if (!empty($filters['country_id'])) {
      $query->where('country_id', $filters['country_id']);
    }

    if (!empty($filters['format_id'])) {
      $query->where('format_id', $filters['format_id']);
    }

    // si no hay ningun filtro mostramos todos los registros paginados de a 5
    if (empty(array_filter($filters))) {
      $calls = Call::paginate(6);
    }
    // Si hay filtros los aplicamos,mostrando los registros paginados de a 5
    $calls = $query->paginate(6);


    // Obtener los datos para los combos
    $countries = Country::all();
    $institutions = Institution::all();
    $dedications = Dedication::all();
    $durations = Duration::all();
    $formats = Format::all();

    return view('frontend.calls2', compact('calls', 'countries', 'institutions', 'dedications', 'durations', 'formats', 'filters'));
  }

  public function details(Call $call)
  {
    return view('frontend.calls-details', [
      'call' => $call
    ]);
  }

  public function callsByCountry($id): View
  {
    $calls = Call::where('country_id', '=', intval($id))->get();
    $country = Country::find($id);
    // dd($id, '|', $calls);

    return view('frontend.calls-by-country', [
      'calls' => $calls,
      'country' => $country
    ]);
  }
}
