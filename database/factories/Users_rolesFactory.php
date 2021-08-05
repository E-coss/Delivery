<?php

namespace Database\Factories;

use App\Models\Users_roles;
use Illuminate\Database\Eloquent\Factories\Factory;

class Users_rolesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Users_roles::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1,100),
            'role_id' => $this->faker->randomElement(['1','2','3']),
        ];
    }
}
