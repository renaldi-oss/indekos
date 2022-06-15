<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ApplicantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->email(),
            'phone' => $this->faker->phoneNumber(),
            'gender' => mt_rand(0,1),
            'address' => $this->faker->address(),
            'photo' => 'images/test/test.jpg',
            'cv' => '',
            'password' => bcrypt('test') // password
        ];
    }
}
