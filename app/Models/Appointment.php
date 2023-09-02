<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Appointment extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
        'resonAppointment',
        'patient_id',
        'visit_id',
        'doctorAvT_id',
        'notes'
    ];

    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
    public function visit(): BelongsTo
    {
        return $this->belongsTo(Visit::class, 'visit_id');
    }

    // public function doctoravt(): BelongsTo
    // {
    //     return $this->belongsTo(DoctorAvT::class, 'doctorAvT_id');
    // }

}
