<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sector;
use Illuminate\Support\Str;

class Call extends Model
{
  use HasFactory;

  protected $table = 'calls';
  protected $fillable = [
    'name',
    'slug',
    'resume',
    'content',
    'link',
    'expiration',
    'extended',
    'country_id',
    'institution_id',
    'dedication_id',
    'duration_id',
    'format_id',
    'comment',
    'publish',
    'unpublish',
    'state_id',
  ];

  // Asignar slug automáticamente al crear ó actualizar una convocatoria
  protected static function boot()
  {
    parent::boot();

    // Cuando creamos una convocatoria asignamos al slug el nombre de la convocatoria
    static::creating(function ($call) {
      $call->slug = Str::slug($call->name);
    });

    // Cuando actualizamos una convocatoria asignamos al slug el nombre de la convocatoria

    static::updating(function ($call) {
      $call->slug = Str::slug($call->name);
    });
  }

  // tomar como key el slug en vez del ID
  public function getRouteKeyName()
  {
    return 'slug';
  }

  // relacion muchos a muchos con sectores//
  public function sectors()
  {
    return $this->belongsToMany(Sector::class);
  }

  public function countries()
  {
    return $this->belongsToMany(Country::class, 'call_country');
  }

  public function institution()
  {
    return $this->belongsTo(Institution::class);
  }

  public function dedication()
  {
    return $this->belongsTo(Dedication::class);
  }

  public function duration()
  {
    return $this->belongsTo(Duration::class);
  }

  public function format()
  {
    return $this->belongsTo(Format::class);
  }

  public function state()
  {
    return $this->belongsTo(State::class);
  }
}
