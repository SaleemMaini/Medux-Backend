<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DoctorAvT extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'type',
    //     'status',
    //     'doctor_id',
    //     'availibleTime_id',
    //     'appointment_id'
    // ];



    // public function doctor(): BelongsTo
    // {
    //     return $this->belongsTo(Doctor::class, 'doctor_id');
    // }
    // public function availibletaime(): BelongsTo
    // {
    //     return $this->belongsTo(AvailibleTime::class, 'availibleTime_id');
    // }
    // public function appointment(): BelongsTo
    // {
    //     return $this->belongsTo(Appointment::class, 'appointment_id');
    // }
}
