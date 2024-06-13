<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Call extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'resume',
        'content',
        'link',
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
}
