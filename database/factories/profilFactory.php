<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class profilFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'nama' => fake()->name,
            'jabatan' => fake()->jobTitle,
            'mapel' => fake()->sentence,
            'email' => fake()->email,
            'no_hp' => fake()->phoneNumber,
        ];
        
    }
}
