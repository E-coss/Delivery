<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Administrador']);
        $role2 = Role::create(['name' => 'Supervisor']);
        $role3 = Role::create(['name' => 'Vendedor']);
        $role4 = Role::create(['name' => 'Cliente']);
        $role5 = Role::create(['name' => 'Delivery']);

        Permission::create(['name' => 'admin.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.create'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.edit'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.destroy'])->syncRoles([$role1]);

        Permission::create(['name' => 'vendedor.index'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'vendedor.create'])->syncRoles([$role1,$role3]);
        Permission::create(['name' => 'vendedor.edit'])->syncRoles([$role1,$role3]);

        Permission::create(['name' => 'cliente.index'])->syncRoles([$role1,$role2,$role3,$role4]);
        Permission::create(['name' => 'cliente.create'])->syncRoles([$role1,$role2,$role3,$role4]);
        Permission::create(['name' => 'cliente.edit'])->syncRoles([$role1,$role2,$role3,$role4]);
        Permission::create(['name' => 'cliente.destroy'])->syncRoles([$role1,$role2,$role3,$role4]);

        Permission::create(['name' => 'delivery.index'])->syncRoles([$role1,$role2,$role3,$role5]);
        Permission::create(['name' => 'delivery.edit'])->syncRoles([$role1,$role5]);
        Permission::create(['name' => 'delivery.destroy'])->syncRoles([$role1,$role5]);
    }
}
