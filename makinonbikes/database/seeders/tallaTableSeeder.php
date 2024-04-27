<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tallaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('talla')->insert([
            ['talla'=>'Sin talla'],
            ['talla' => 'XS'],
            ['talla' => 'S'],
            ['talla' => 'M'],
            ['talla' => 'L'],
            ['talla' => 'XL'],
            ['talla' => 'XXL'],
            ['talla' => 'XXXL'],
            ['talla' => '38'],
            ['talla' => '39'],
            ['talla' => '40'],
            ['talla' => '41'],
            ['talla' => '42'],
            ['talla' => '43'],
            ['talla' => '44'],
            ['talla' => '45'],
            ['talla' => '46'],
            ['talla'=>'160mm'],
            ['talla'=>'180mm'],
            ['talla'=>'203mm'],
            ['talla'=>'27.2mm'],
            ['talla'=>'30.9mm'],
            ['talla'=>'31.6mm'],
        ]);
    }
}
