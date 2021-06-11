<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'name',
        'city',
        'address',
        'phone',
        'speciality_id',
    ];

    public function speciality()
    {
        return $this->belongsTo(Speciality::class);
    }
}
