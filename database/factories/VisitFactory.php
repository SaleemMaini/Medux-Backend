<?php

namespace Database\Factories;

use App\Models\Appointment;
use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Visit>
 */
class VisitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'prescription' => $this->faker->text(),
            'dateAndTime' => $this->faker->dateTime(),
            'notes' => $this->faker->text(),
            'patient_id' => function(){
                return Patient::factory()->create()->id;
            },
            'appointment_id' => function(){
                return Appointment::factory()->create()->id;
            }

        ];
    }
}
