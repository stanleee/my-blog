<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'full_name'=>$this->faker->firstName,
            'age'=>$this->faker->date,
            'education'=>$this->faker->company,
            'years_of_experience'=>$this->faker->date,
            'user_id' => User::factory() //Generates a User from factory and extracts id
        ];
    }
}
