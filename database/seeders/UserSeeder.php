<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i < 10; $i++) {
            $user = User::create([
                'name'=> fake()->name(),
                'email'=> fake()->unique()->safeEmail(),
                'password'=> Hash::make(Str::password())
            ]);
            $user->assignRole('User');
        }
        $admin = User::create([
            'name'=> 'admin',
            'email'=> 'admin@gmail.com',
            'password'=> Hash::make('Admin')
        ]);
        $admin->assignRole('Admin');
    }
}
