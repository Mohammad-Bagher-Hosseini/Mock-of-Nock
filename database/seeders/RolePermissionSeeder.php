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
     */
    public function run(): void
    {
        Permission::insert(array_map(function($permission){
            return ['name' => $permission];
        }, [
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
        ]));

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
