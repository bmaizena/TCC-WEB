<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pontos extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'latitude',
        'longitude',
        'arrivalPrediction',
        'departurePrediction',
        'schedules',
        'fare',
    ];

    protected $casts = [
        'schedules' => 'array',
    ];
}
