<?php

namespace Database\Seeders;

use App\Models\Pop;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i < 5; $i++) {
            Pop::create([
                'name'=> fake()->name()
            ]);
        }
    }
}
