<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName,
            'apellido' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'direccion' => $this->faker->streetAddress(),
            'sexo' => $this->faker->randomElement(['F','M']),
            'estado' => $this->faker->randomElement(['1','0']),
            'email_verified_at' => now(),
            'password' => '$2y$10$6stBx5VcSO8XDmYeSCfujOa79eTs4hIBgMlg8DH7Cl.qrdctFLmze', // password
        ];
    }
}
