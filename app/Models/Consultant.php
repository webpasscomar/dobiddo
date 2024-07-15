<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultant extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'lastname',
        'email',
        'nationality_id',
        'residence_id',
        'education_id',
        'experience',
        'linkedin',
    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function education()
    {
        return $this->belongsTo(Education::class);
    }
}
