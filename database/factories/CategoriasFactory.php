<?php

namespace Database\Factories;

use App\Models\Categorias;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoriasFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Categorias::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->firstName(),
            'descripcion' => $this->faker->sentence(),
            'estado' => $this->faker->randomElement(['Activo','Inactivo']),
            'creado_por' => $this->faker->numberBetween(1,100),
        ];
    }
}
