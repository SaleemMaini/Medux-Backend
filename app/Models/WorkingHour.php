<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class WorkingHour extends Model
{
    use HasFactory, Notifiable;


    protected $fillable = [
        'workingHours',
        'averageVisitTime',
    ];

    protected $casts = [
        'workingHours' => 'array',
    ];
}
