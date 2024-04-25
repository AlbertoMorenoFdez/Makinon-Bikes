<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            usuarioTableSeeder::class,
            proveedorTableSeeder::class,
            marcaTableSeeder::class,
            productoTableSeeder::class,
            colorTableSeeder::class,
            tallaTableSeeder::class,
            productoColorTallaTableSeeder::class,
            
        ]);
    }
}
