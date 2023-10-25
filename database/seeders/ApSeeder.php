<?php

namespace Database\Seeders;

use App\Models\AP;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ApSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i < 20; $i++) {
            AP::create([
                'name'=> fake()->name(),
                'pop_id'=> floor($i/4) + 1
            ]);
        }
    }
}
