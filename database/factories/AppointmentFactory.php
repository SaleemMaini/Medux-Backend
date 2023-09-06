<?php

namespace Database\Factories;

use App\Models\Doctor;
use App\Models\DoctorAvT;
use App\Models\Patient;
use App\Models\Visit;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointment>
 */
class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'date' => $this->faker->dateTime(),
            'doctor_id' => function(){
                return Doctor::factory()->create()->id;
            },
            'patient_id' => function(){
                return Patient::factory()->create()->id;
            }
            // 'doctorAvT_id' => function(){
            //     return DoctorAvT::factory()->create()->id;
            // },
        ];
    }
}
