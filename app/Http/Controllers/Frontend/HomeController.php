<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Country;
use App\Models\Call;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $countriesWithCalls = Country::select('countries.id', 'countries.name', 'countries.lat', 'countries.lon', DB::raw('count(calls.id) as calls_count'))
            ->join('calls', 'countries.id', '=', 'calls.country_id')
            ->where('expiration', '>=', Carbon::today())
            ->where('calls.state_id', '=', 2)
            ->groupBy('countries.id', 'countries.name', 'countries.lat', 'countries.lon')
            ->get();
        // dd($countriesWithCalls);
        return view('frontend.home', compact('countriesWithCalls'));
        // return view('frontend.home',);
    }
}
