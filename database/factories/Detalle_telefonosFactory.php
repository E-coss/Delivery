<?php

namespace Database\Factories;

use App\Models\Detalle_telefonos;
use Illuminate\Database\Eloquent\Factories\Factory;

class Detalle_telefonosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Detalle_telefonos::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tipo_telefono' => $this->faker->randomElement(['P','C','F','T']),
            'numero' => $this->faker->unique()->tollFreePhoneNumber,
            'entidad_id' => $this->faker->numberBetween(1,100),
            'entidad' => $this->faker->randomElement(['S','E','C']),
            'creado_por' => $this->faker->numberBetween(1,100),
        ];
    }
}
