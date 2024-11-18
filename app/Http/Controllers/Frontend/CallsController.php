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
  // Método principal de la vista de convocatorias
  public function index(Request $request): View
  {
    // Obtenemos los filtros
    $filters = $this->getFilters($request);

    // Aplicamos la búsqueda de convocatorias según los filtros
    $calls = $this->getFilteredCalls($filters);

    // Obtener los nombres de los filtros
    $country = isset($filters['country_id']) ? Country::find($filters['country_id']) : null;
    $format = isset($filters['format_id']) ? Format::find($filters['format_id']) : null;

    // Pasamos las entidades relacionadas
    $data = $this->getCommonData();
    $data['calls'] = $calls;
    $data['filters'] = $filters;
    $data['country'] = $country;
    $data['format'] = $format;

    return view('frontend.calls', $data);
  }

  // Método para obtener los detalles de una convocatoria
  public function details(Call $call): View
  {
    return view('frontend.calls-details', ['call' => $call]);
  }

  // Método para mostrar las convocatorias por país
  public function callsByCountry(int $id, Request $request): View
  {
    // Aplicamos el filtro por país
    $filters = $this->getFilters($request);
    $filters['country_id'] = $id;

    // Obtenemos las convocatorias filtradas
    $calls = $this->getFilteredCalls($filters);

    // Obtenemos el país para mostrarlo en la vista
    $country = Country::findOrFail($id);

    // Pasamos las entidades relacionadas
    $data = $this->getCommonData();
    $data['calls'] = $calls;
    $data['filters'] = $filters;
    $data['country'] = $country;

    return view('frontend.calls', $data);
  }


  // -------------------- Métodos privados para refactorización --------------------

  // Obtener filtros de la request
  private function getFilters(Request $request): array
  {
    return $request->only(['search', 'country_id', 'format_id']);
  }

  // Obtener las convocatorias filtradas
  private function getFilteredCalls(array $filters)
  {
    // Consulta básica para las convocatorias vigentes
    $query = Call::where('expiration', '>=', Carbon::today())
      ->where('state_id', '=', 2);

    // Aplicar filtro por búsqueda en nombre o resumen
    if (!empty($filters['search'])) {
      $query->where(function ($q) use ($filters) {
        $q->where('name', 'like', '%' . $filters['search'] . '%')
          ->orWhere('resume', 'like', '%' . $filters['search'] . '%');
      });
    }

    // Aplicar filtro por país
    if (!empty($filters['country_id'])) {
      $query->whereHas('countries', function ($query) use ($filters) {
        $query->where('countries.id', $filters['country_id']);
      });
    }

    // Aplicar filtro por formato
    if (!empty($filters['format_id'])) {
      $query->where('format_id', $filters['format_id']);
    }

    // Devolver los resultados paginados
    return $query->orderBy('expiration', 'asc')->paginate(15);
  }

  // Obtener datos comunes para los combos de selección
  private function getCommonData(): array
  {
    return [
      'countries' => Country::all(),
      'institutions' => Institution::all(),
      'dedications' => Dedication::all(),
      'durations' => Duration::all(),
      'formats' => Format::all(),
    ];
  }
}
