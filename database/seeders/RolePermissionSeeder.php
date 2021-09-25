<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RolePermissionSeeder extends Seeder
{
    public function run()
    {
        $roles = ['regulator'];
        $guards = ['regulator'];
        $maps = ['create', 'show', 'list', 'update', 'delete'];
        $models = ['events'];

        foreach ($roles as $index => $role) {
            Role::updateOrCreate(
                ['guard_name' => $guards[$index], 'name' => $role]
            );
        }


        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        foreach ($models as $model) {
            foreach ($maps as $map) {
                Permission::updateOrCreate([
                    'name' => $map . '_' . $model,
                    'guard_name' => 'regulator'
                ]);
            }
        }
    }
}
