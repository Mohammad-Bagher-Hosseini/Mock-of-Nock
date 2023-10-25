<?php

namespace Database\Seeders;

use App\Models\Link;
use App\Models\Point;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i < 20; $i++) {
            Point::create([
                'name'=> fake()->name()
            ]);
            Link::create([
                'ap_id'=> $i,
                'point_id'=>$i
            ]);
        }
    }
}
