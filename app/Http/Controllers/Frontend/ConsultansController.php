<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Education;
use App\Models\Sector;
use Illuminate\Http\Request;

class ConsultansController extends Controller
{
  protected $sectors, $countries, $educations;
    public function index()
    {
      $this->countries = Country::all();
      $this->sectors = Sector::all();
      $this->educations = Education::all();

      return view('frontend.consultans',[
        'sectors'=> $this->sectors,
        'countries' => $this->countries,
        'educations'=> $this->educations
      ]);
    }
}