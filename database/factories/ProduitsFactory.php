<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Produits; 
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produits>
 */
class ProduitsFactory extends Factory
{
    protected $model = Produits::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        
         return [
            'reference' => Str::random(10), 
            'designation' => $this->faker->word,
            'image' => '../../../assets/img/products/2.png', // Generate a random image URL
            'categorie_id' => $this->faker->numberBetween(1, 10),
            'matiere_id' => $this->faker->numberBetween(1, 5),
            'prix_achat_gramme' => $this->faker->randomFloat(2, 10, 500), // Generate a random float
            'prix_vente_gramme' => $this->faker->randomFloat(2, 500, 1000),
            'poids_gramme' => $this->faker->numberBetween(1, 1000),
            'remise_max' => $this->faker->numberBetween(0, 30),
            'quantite' => $this->faker->numberBetween(0, 100),
        ];
    }
}
