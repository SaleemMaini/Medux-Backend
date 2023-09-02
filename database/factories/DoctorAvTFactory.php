<?php

namespace Database\Factories;

use App\Models\Appointment;
use App\Models\AvailibleTime;
use App\Models\Doctor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DoctorAvT>
 */
class DoctorAvTFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // 'type' => $this->faker->name(),
            // 'status' => $this->faker->name(),
            'doctor_id' => function(){
                return Doctor::factory()->create()->id;
            },
            'availibleTime_id' => function(){
                return AvailibleTime::factory()->create()->id;
            },
            'appointment_id' => function(){
                return Appointment::factory()->create()->id;
            },
        ];
    }
}
