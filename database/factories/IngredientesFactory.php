<?php

namespace Database\Factories;

use App\Models\Ingredientes;
use Illuminate\Database\Eloquent\Factories\Factory;

class IngredientesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ingredientes::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->unique()->randomElement(['S','E','C']),
            'estado' => $this->faker->randomElement(['Disponible','Agotado']),
            'creado_por' => $this->faker->numberBetween(1,100),
        ];
    }
}
