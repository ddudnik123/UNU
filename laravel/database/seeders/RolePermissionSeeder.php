<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::create(['name' => 'admin']);
        $this->createPermissions();
        $permissions = Permission::all();
        $adminRole->givePermissionTo($permissions);

    }

    public function createPermissions() {
        Permission::insert([
            ['name' => 'create tasks', 'guard_name' => 'web'],
            ['name' => 'edit tasks', 'guard_name' => 'web'],
            ['name' => 'block users', 'guard_name' => 'web'],
        ]);
    }
}
