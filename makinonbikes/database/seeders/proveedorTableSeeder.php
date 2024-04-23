<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class proveedorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('proveedor')->insert(
            [
                [
                    'nombre' => 'Shimano',
                    'CIF' => 'S12345678',
                    'direccion' => 'Calle de Shimano, 12',
                    'telefono' => '123456789',
                    'email' => 'shimano@bike',
                    'comentario' => 'Proveedor de componentes de bicicleta'
                ],
                [
                    'nombre' => 'Team Bike',
                    'CIF' => 'A12345678',
                    'direccion' => 'Calle de la Cierva, 12',
                    'telefono' => '123456789',
                    'email' => 'team@bike',
                    'comentario' => ''
                ],
                [
                    'nombre' => 'Comet',
                    'CIF' => 'C12345678',
                    'direccion' => 'Calle de Comet, 12',
                    'telefono' => '123456789',
                    'email' => 'comet@bike',
                    'comentario' => ''
                ],
                [
                    'nombre' => 'Gobik',
                    'CIF' => 'G12345678',
                    'direccion' => 'Calle de Gobik, 12',
                    'telefono' => '123456789',
                    'email' => 'gobik@bike',
                    'comentario' => 'Proveedor de ropa de ciclismo'
                ],
                [
                    'nombre' => 'KTM Bike',
                    'CIF' => 'K12345678',
                    'direccion' => 'Calle de KTM, 12',
                    'telefono' => '123456789',
                    'email' => 'ktm@bike',
                    'comentario' => ''
                ],
                [
                    'nombre' => 'Focus Bikes',
                    'CIF' => 'F12345678',
                    'direccion' => 'Calle de Focus, 12',
                    'telefono' => '123456789',
                    'email' => 'focus@bike',
                    'comentario' => 'Proveedor de bicicletas de alta gama'
                ], 
                [
                    'nombre' => 'BH Bikes',
                    'CIF' => 'B12345678',
                    'direccion' => 'Calle de BH, 12',
                    'telefono' => '123456789',
                    'email' => 'bh@bike',
                    'comentario' => ''
                ], 
                [
                    'nombre' => 'Giro',
                    'CIF' => 'I12345678',
                    'direccion' => 'Calle de Giro, 12',
                    'telefono' => '123456789',
                    'email' => 'giro@bike',
                    'comentario' => 'Proveedor de cascos de ciclismo'
                ], 
                [
                    'nombre' => 'Castelli',
                    'CIF' => 'T12345678',
                    'direccion' => 'Calle de Castelli, 12',
                    'telefono' => '123456789',
                    'email' => 'castelli@bike',
                    'comentario' => 'Proveedor de ropa de ciclismo'
                ], 
                [
                    'nombre' => 'Oakley',
                    'CIF' => 'O12345678',
                    'direccion' => 'Calle de Oakley, 12',
                    'telefono' => '123456789',
                    'email' => 'okley@glasses',
                    'comentario' => 'Proveedor de gafas'
                ], 
                [
                    'nombre' => 'Ridley',
                    'CIF' => 'R12345678',
                    'direccion' => 'Calle de Ridley, 12',
                    'telefono' => '123456789',
                    'email' => 'ridley@bike',
                    'comentario' => ''
                ],[
                    'nombre'=>'Scott',
                    'CIF'=>'Z12345678',
                    'direccion'=>'Calle de Scott, 12',
                    'telefono'=>'123456789',
                    'email'=>'scott@bike',
                    'comentario'=>'Proveedor de bicicletas de alta gama'
                ],[
                    'nombre'=>'Abus',
                    'CIF'=>'U12345678',
                    'direccion'=>'Calle de Abus, 12',
                    'telefono'=>'123456789',
                    'email'=>'abus@bike',
                    'comentario'=>'Proveedor de cascos de ciclismo'
                ],[
                    'nombre'=>'Mavic',
                    'CIF'=>'M12345678',
                    'direccion'=>'Calle de Mavic, 12',
                    'telefono'=>'123456789',
                    'email'=>'mavic@bike',
                    'comentario'=>'Proveedor de ruedas de bicicleta'
                ],[
                    'nombre'=>'Galfer',
                    'CIF'=>'G12345679',
                    'direccion'=>'Calle de Galfer, 12',
                    'telefono'=>'123456789',
                    'email'=>'galfer@disc',
                    'comentario'=>'Proveedor discos de freno'
                ],[
                    'nombre'=>'DtSwiss',
                    'CIF'=>'D12345678',
                    'direccion'=>'Calle de DtSwiss, 12',
                    'telefono'=>'123456789',
                    'email'=>'dtswiss@bike',
                    'comentario'=>'Proveedor de ruedas de bicicleta'
                ],[
                    'nombre'=>'Pirelli',
                    'CIF'=>'P12345678',
                    'direccion'=>'Calle de Pirelli, 12',
                    'telefono'=>'123456789',
                    'email'=>'pirelli@bike',
                    'comentario'=>'Proveedor de cubiertas de bicicleta'
                ], [
                    'nombre'=>'Gemini',
                    'CIF'=>'G12345680',
                    'direccion'=>'Calle de Gemini, 12',
                    'telefono'=>'123456789',
                    'email'=>'gemini@bike',
                    'comentario'=>'Manillares ultraligeros'
                ], [
                    'nombre'=>'Selle Italia',
                    'CIF'=>'S12345679',
                    'direccion'=>'Calle de Selle Italia, 12',
                    'telefono'=>'123456789',
                    'email'=>'selle@bike',
                    'comentario'=>'Proveedor de sillines de bicicleta'
                ],[
                    'nombre'=>'Maurten',
                    'CIF'=>'M12345679',
                    'direccion'=>'Calle de Maurten, 12',
                    'telefono'=>'123456789',
                    'email'=>'maurten@alimentacion',
                    'comentario'=>'Proveedor de geles y bebidas deportivas'
                ]
            ]
        );
    }
}
