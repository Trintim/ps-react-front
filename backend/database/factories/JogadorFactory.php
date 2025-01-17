<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jogador>
 */
class JogadorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome'=>$this->faker->name,
            'imagem'=>$this->faker->imageUrl(640,480),
            'time'=>$this->faker->name,
            'idade'=>$this->faker->numberBetween(10,50),
            'nacionalidade_id'=>$this->faker->numberBetween(1,10),
        ];
    }
}
