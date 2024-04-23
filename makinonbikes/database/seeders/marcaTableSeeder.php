<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class marcaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('marca')->insert([
            
            /*1*/['nombre' =>'Shimano'],
            /*2*/['nombre'=>'Sram'],
            /*3*/['nombre'=>'FSA'],
            /*4*/['nombre'=>'Campagnolo'],
            /*5*/['nombre'=>'Galfer'],
            /*6*/['nombre'=>'Hope'],
            /*7*/['nombre'=>'BH'],
            /*8*/['nombre'=>'KTM'],
            /*9*/['nombre'=>'Focus'],
            /*10*/['nombre'=>'Ridley'],
            /*11*/['nombre'=>'Specialized'],
            /*12*/['nombre'=>'Scott'],
            /*13*/['nombre'=>'Mavic'],
            /*14*/['nombre'=>'DtSwiss'],
            /*15*/['nombre'=>'Fulcrum'],
            /*16*/['nombre'=>'Oakley'],
            /*17*/['nombre'=>'Giro'],
            /*18*/['nombre'=>'Abus'],
            /*19*/['nombre'=>'Gobik'],
            /*20*/['nombre'=>'Castelli'],
            /*21*/['nombre'=>'Maxxis'],
            /*22*/['nombre'=>'Pirelli'],
            /*23*/['nombre'=>'Continental'],
            /*24*/['nombre'=>'Gemini'],
            /*25*/['nombre'=>'PRO'],
            /*26*/['nombre'=>'Tune'],
            /*27*/['nombre'=>'Speedsix'],
            /*28*/['nombre'=>'Crank Brothers'],
            /*29*/['nombre'=>'Zipp'],
            /*30*/['nombre'=>'Ritchey'],
            /*31*/['nombre'=>'Selle Italia'],
            /*32*/['nombre'=>'Selle San Marco'],
            /*33*/['nombre'=>'RockShox'],
            /*34*/['nombre'=>'SIS'],
            /*35*/['nombre'=>'Maurten'],
            /*36*/['nombre'=>'SIS'],
        ]);
    }
}
