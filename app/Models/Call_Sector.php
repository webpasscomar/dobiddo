<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Call_Sector extends Model
{
    use HasFactory;
    protected $fillable = [
        'sector_id',
        'call_id',
    ];
}
