<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $permissions = [
            'create_pop',
            'show_pop',
            'update_pop',
            'delete_pop',
            'create_point',
            'show_point',
            'update_point',
            'delete_point',
            'create_ap',
            'show_ap',
            'update_ap',
            'delete_ap',
            'create_link',
            'show_link',
            'update_link',
            'delete_link',
        ];

        foreach (array_map(function($permission){
            return ['name' => $permission];
        }, $permissions) as $permission) {
            Permission::create($permission);
        }

        $admin = Role::create(['name' => 'Admin']);
        $admin->syncPermissions([
            'create_pop',
            'show_pop',
            'update_pop',
            'delete_pop',
            'create_point',
            'show_point',
            'update_point',
            'delete_point',
            'create_ap',
            'show_ap',
            'update_ap',
            'delete_ap',
            'create_link',
            'show_link',
            'update_link',
            'delete_link',
        ]);

        $user = Role::create(['name' => 'User']);
        $user->syncPermissions([
            'show_pop',
            'show_point',
            'show_ap',
            'show_link',
        ]);
    }
}
