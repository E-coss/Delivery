<?php

namespace Database\Factories;

use App\Models\Configuracion;
use Illuminate\Database\Eloquent\Factories\Factory;

class ConfiguracionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Configuracion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->company(),
            'direccion' => $this->faker->streetAddress(),
            'eslogan' => $this->faker->sentence(),
            'email' => $this->faker->companyEmail(),
            'favicon' => 'favicon.png',
            'logo_admin' => 'logo_admin.png',
            'logo_frontend' => 'logo_frontend.png',
            'facebook' => 'https://www.facebook.com/',
            'instagram' => 'https://www.instagram.com/',
            'youtube' => 'https://www.youtube.com/',
            'twitter' => 'https://twitter.com/',
        ];
    }
}
