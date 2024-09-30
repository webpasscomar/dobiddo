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
use Carbon\Carbon;

class CallsController extends Controller
{
  public function index(Request $request)
  {

    // búsqueda de convocatorias por nombre, resumen, contenido, pais y formato
    // pasamos filters al front para saber si se hizo una busqueda y mostrar el botón de reset en caso de haya filtros aplicados
    $filters = $request->only(['search', 'country_id', 'format_id']);

    // si no hay ningun filtro mostramos todos los registros paginados de a 5
    if (empty(array_filter($filters))) {
      // Devuelvo todas las calls que aun esten vigentes paginadas
      $calls = Call::where('expiration', '>=', Carbon::today())->paginate(6);
    } else {

      $query = Call::where('expiration', '>=', Carbon::today());

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

      // Si hay filtros los aplicamos,mostrando los registros paginados de a 5
      $calls = $query->paginate(6);
    }



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
