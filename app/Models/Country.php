<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
  use HasFactory;

  protected $fillable = [
    'name',
    'flag',
    'lat',
    'lon',
  ];

  public function nationalities()
  {
    return $this->hasMany(Consultant::class, 'nationalityCountry_id', 'id');
  }

  public function residences()
  {
    return $this->hasMany(Consultant::class, 'residenceCountry_id', 'id');
  }

  public function calls()
  {
    return $this->belongsToMany(Call::class, 'call_country');
  }
}
