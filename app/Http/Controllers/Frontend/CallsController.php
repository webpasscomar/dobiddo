<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use App\Models\Call;
use App\Models\Country;
use App\Models\Institution;
use App\Models\Dedication;
use App\Models\Duration;
use App\Models\Format;
use Illuminate\Http\Request;

class CallsController extends Controller
{
    public function index(Request $request)
    {
        $query = Call::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', '%' . $search . '%')
                    ->orWhere('resume', 'like', '%' . $search . '%');
            });
        }

        if ($request->has('country_id')) {
            $query->where('country_id', $request->input('country_id'));
        }

        if ($request->has('institution_id')) {
            $query->where('institution_id', $request->input('institution_id'));
        }

        if ($request->has('dedication_id')) {
            $query->where('dedication_id', $request->input('dedication_id'));
        }

        if ($request->has('duration_id')) {
            $query->where('duration_id', $request->input('duration_id'));
        }

        if ($request->has('format_id')) {
            $query->where('format_id', $request->input('format_id'));
        }

        $calls = $query->paginate(5);

        // Obtener los datos para los combos
        $countries = Country::all();
        $institutions = Institution::all();
        $dedications = Dedication::all();
        $durations = Duration::all();
        $formats = Format::all();

        return view('frontend.calls', compact('calls', 'countries', 'institutions', 'dedications', 'durations', 'formats'));
    }
}
