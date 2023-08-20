<?php

namespace Database\Factories;

use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctors_has_patient>
 */
class Doctors_has_patientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'doctor_id' => function(){
                return Doctor::factory()->create()->id;
            },
            'patient_id' => function(){
                return Patient::factory()->create()->id;
            }
        ];
    }
}
