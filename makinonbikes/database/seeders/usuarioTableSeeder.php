<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class usuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuario')->insert([
            [
                'nombre' => 'Alberto',
                'apellidos' => 'Moreno',
                'email' => 'alberto@moreno',
                'password' => bcrypt('12345678'),
                'nif' => '12345678a',
                'telefono' => '123456789',
                'direccion' => 'Calle del administrador, 1',
                'cp' => '12345',
                'ciudad' => 'Cártama',
                'rol' => 'admin'
            ],
            [
                'nombre' => 'user',
                'apellidos' => 'user',
                'email' => 'user@user',
                'password' => bcrypt('12345678'),
                'nif' => '12345678b',
                'telefono' => '123456789',
                'direccion' => 'Calle del user, 2',
                'cp' => '12345',
                'ciudad' => 'Cártama',
                'rol' => 'user'
            ],
            [
                'nombre' => 'usuario de prueba 6',
                'apellidos' => 'usuario de prueba 6',
                'email' => 'usuario6@usuario6',
                'password' => bcrypt('12345678'),
                'nif' => '12345678y',
                'telefono' => '123456789',
                'direccion' => 'Calle de la Prueba, 12',
                'cp' => '12345',
                'ciudad' => 'Prueba',
                'rol' => 'user'
            ],
            [
                'nombre' => 'usuario de prueba 7',
                'apellidos' => 'usuario de prueba 7',
                'email' => 'usuario7@usuario7',
                'password' => bcrypt('12345678'),
                'nif' => '12345678u',
                'telefono' => '123456789',
                'direccion' => 'Calle de la Prueba, 12',
                'cp' => '12345',
                'ciudad' => 'Prueba',
                'rol' => 'user'
            ],
            [
                'nombre' => 'usuario de prueba 8',
                'apellidos' => 'usuario de prueba 8',
                'email' => 'usuario8@usuario8',
                'password' => bcrypt('12345678'),
                'nif' => '12345678u',
                'telefono' => '123456789',
                'direccion' => 'Calle de la Prueba, 12',
                'cp' => '12345',
                'ciudad' => 'Prueba',
                'rol' => 'user'
            ]]
        );
    }
}
