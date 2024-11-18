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

        $countriesWithCalls = Country::select(
            'countries.id',
            'countries.name',
            'countries.lat',
            'countries.lon',
            DB::raw('count(call_country.call_id) as calls_count')
        )
            ->join('call_country', 'countries.id', '=', 'call_country.country_id')
            ->join('calls', 'call_country.call_id', '=', 'calls.id')
            ->where('calls.expiration', '>=', Carbon::today())
            ->where('calls.state_id', '=', 2)
            ->groupBy('countries.id', 'countries.name', 'countries.lat', 'countries.lon')
            ->get();

        // dd($countriesWithCalls);
        return view('frontend.home', compact('countriesWithCalls'));
        // return view('frontend.home',);
    }
}
