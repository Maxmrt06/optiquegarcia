<?php

namespace Database\Factories;

use App\Models\Produit;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProduitFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Produit::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' =>$this->faker->name(),
            'photo' =>$this->faker->sentence,
            'marque' =>$this->faker->sentence,
            'reference' =>$this->faker->numberBetween(0,10),
            'prix' =>$this->faker->numberBetween(0,100),
        ];
    }
}
