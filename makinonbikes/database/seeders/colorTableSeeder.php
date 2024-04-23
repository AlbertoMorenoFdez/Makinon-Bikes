<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class colorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('color')->insert([
            ['color' => 'White'],
            ['color' => 'Black'],
            ['color' => 'Red'],
            ['color' => 'Blue'],
            ['color' => 'Green'],
            ['color' => 'Yellow'],
            ['color' => 'Purple'],
            ['color' => 'Orange'],
            ['color' => 'Pink'],
            ['color' => 'Brown'],
            ['color' => 'Grey'],
            ['color' => 'Beige'],
            ['color' => 'Silver'],
            ['color' => 'Gold'],
            ['color' => 'Lightgrey'],
            ['color' => 'Lightblue'],
            ['color' => 'Darkgrey'],
            ['color' => 'Titanium'],
            
        ]);
    }
}
