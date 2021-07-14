<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    { 
        \App\Models\User::factory(100)->create();
        \App\Models\Categorias::factory(20)->create();
        \App\Models\Configuracion::factory()->create();
        \App\Models\Detalle_ingredientes::factory(20)->create();
        \App\Models\Detalle_telefonos::factory(100)->create();
        \App\Models\Ingredientes::factory(3)->create();
        \App\Models\Nosotros::factory()->create();
        $this->call(RoleSeeder::class);
    }
}
