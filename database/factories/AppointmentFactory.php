<?php

namespace Database\Factories;

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
            'resonAppointment' => $this->faker->sentence(),
            'patient_id' => function(){
                return Patient::factory()->create()->id;
            },
            'visit_id' => function(){
                return Visit::factory()->create()->id;
            },
            'notes' => $this->faker->text()
        ];
    }
}
