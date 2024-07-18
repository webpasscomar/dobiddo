<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultant extends Model
{
  use HasFactory;

  protected $table = 'consultants';
  protected $fillable = [
    'name',
    'lastname',
    'email',
    'nationalityCountry_id',
    'residenceCountry_id',
    'education_id',
    'experience',
    'linkedin',
  ];

  public function nationality()
  {
    return $this->belongsTo(Country::class, 'nationalityCountry_id', 'id');
  }

  public function residence()
  {
    return $this->belongsTo(Country::class, 'residenceCountry_id', 'id');
  }

  public function education()
  {
    return $this->belongsTo(Education::class, 'education_id', 'id');
  }

  public function sectors()
  {
    return $this->belongsToMany(Sector::class);
  }
}
