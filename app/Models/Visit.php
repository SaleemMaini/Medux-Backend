<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Visit extends Model
{
    use HasFactory;
    protected $fillable = [
        'prescription',
        'dateAndTime',
        'notes',
        'patient_id',
        // 'appointment_id'
    ];



    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }


    // public function appointment(): BelongsTo
    // {
    //     return $this->belongsTo(Appointment::class, 'appointment_id');
    // }

    public function payment(): HasMany
    {
        return $this->hasMany(Payment::class);
    }
}
