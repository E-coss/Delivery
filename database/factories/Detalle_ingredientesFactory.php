<?php

namespace Database\Factories;

use App\Models\Detalle_ingredientes;
use Illuminate\Database\Eloquent\Factories\Factory;

class Detalle_ingredientesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Detalle_ingredientes::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ingrediente_id' => $this->faker->numberBetween(1,10),
            'producto_id' => $this->faker->numberBetween(1,10),
            'creado_por' => $this->faker->numberBetween(1,100),
        ];
    }
}
