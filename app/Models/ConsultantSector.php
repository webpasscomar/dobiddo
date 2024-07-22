<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultantSector extends Model
{
  use HasFactory;

  protected $table = 'consultant_sector';
  protected $fillable = [
    'consultant_id',
    'sector_id',
  ];
}
