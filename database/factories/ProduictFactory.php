<?php

namespace Database\Factories;
use App\Models\Produits;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produits>
 */
class ProduictFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
            protected $model = Products::class;

        return [
            'reference' => 'Product ' . $this->faker->unique()->word,
            'designation' => $this->faker->text,
            'price' => $this->faker->numberBetween(10, 100),
            'categorie_id' => $this->faker->numberBetween(1, 10),
            'matiere_id' => $this->faker->numberBetween(1, 5),
            
        ];
    }
}
