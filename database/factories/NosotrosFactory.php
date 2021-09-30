<?php

namespace Database\Factories;

use App\Models\Nosotros;
use Illuminate\Database\Eloquent\Factories\Factory;

class NosotrosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Nosotros::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'descripcion' => $this->faker->paragraph(),
            'mision' => $this->faker->paragraph(),
            'vision' => $this->faker->paragraph(),
            'valores' => $this->faker->paragraph(),
            'iframe' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6712.37078951848!2d-70.53522527911126!3d19.230518696740933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eb02c9f7159e1f1%3A0x7b7d5e4339ae79f1!2sEl%20Guaricano!5e0!3m2!1ses!2sdo!4v1602104126427!5m2!1ses!2sdo" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>',
        ];
    }
}
