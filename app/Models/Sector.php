<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
  use HasFactory;

  protected $fillable = [
    'name',
    'status'
  ];

  public function calls()
  {
    return $this->belongsToMany('App\Model\Call');
  }

  public function consultans()
  {
    return $this->belongsToMany(Consultant::class);
  }
}
