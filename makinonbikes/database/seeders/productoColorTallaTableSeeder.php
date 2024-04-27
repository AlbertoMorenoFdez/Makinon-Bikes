<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productoColorTallaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('producto_color_talla')->insert(
            ['id_producto' => 1, 'id_color' => 2, 'id_talla' => 3,'stock' => 1]);
    }
}
