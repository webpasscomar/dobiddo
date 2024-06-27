<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sector;

class Call extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
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

    // relacion muchos a muchos con sectores//
    public function sectors()
    {
        return $this->belongsToMany(Sector::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
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
