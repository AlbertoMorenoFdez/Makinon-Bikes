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
        $datos = [
            [1, 2, 3, 2],
            [1, 2, 4, 1],
            [2, 3, 3, 1],
            [3, 16, 5, 0],
            [4, 15, 4, 1],
            [5, 3, 4, 1],
            [6, 3, 3, 0],
            [7, 16, 2, 2],
            [8, 6, 3, 1],
            [8, 6, 4, 1],
            [9, 4, 4, 1],
            [10, 3, 1, 5],
            [11, 3, 4, 1],
            [12, 4, 4, 2],
            [12, 4, 5, 2],
            [13, 3, 1, 2],
            [14, 3, 1, 1],
            [15, 3, 1, 0],
            [16, 12, 2, 1],
            [16, 12, 3, 0],
            [16, 12, 4, 0],
            [17, 7, 3, 1],
            [17, 7, 4, 1],
            [17, 7, 5, 1],
            [18, 3, 2, 2],
            [18, 3, 3, 2],
            [18, 3, 4, 2],
            [19, 17, 3, 1],
            [19, 17, 4, 1],
            [19, 17, 5, 1],
            [20, 6, 3, 1],
            [20, 6, 4, 2],
            [20, 6, 5, 3],
            [20, 6, 6, 0],
            [21, 2, 2, 1],
            [22, 5, 13, 1],
            [22, 5, 14, 1],
            [22, 5, 15, 1],
            [23, 4, 13, 0],
            [23, 4, 14, 2],
            [23, 4, 15, 2],
            [23, 4, 16, 0],
            [24, 14, 12, 1],
            [25, 4, 4, 2],
            [26, 13, 3, 1],
            [26, 13, 4, 1],
            [27, 17, 2, 2],
            [28, 2, 2, 1],
            [29, 15, 3, 1],
            [29, 15, 4, 2],
            [30, 9, 5, 1],
            [30, 9, 6, 1],
            [31, 4, 3, 0],
            [32, 2, 3, 2],
            [32, 2, 4, 1],
            [32, 2, 5, 0],
            [33, 5, 1, 0],
            [34, 3, 3, 1],
            [34, 3, 4, 1],
            [35, 16, 2, 2],
            [36, 3, 2, 0],
            [36, 3, 3, 1],
            [37, 9, 2, 2],
            [37, 9, 3, 1],
            [37, 9, 4, 2],
            [38, 7, 4, 2],
            [38, 7, 5, 2],
            [39, 5, 3, 1],
            [39, 5, 4, 0],
            [40, 2, 13, 0],
            [40, 2, 14, 0],
            [40, 2, 15, 0],
            [40, 2, 16, 0],
            [41, 3, 9, 1],
            [41, 3, 10, 1],
            [41, 3, 11, 0],
            [41, 3, 12, 2],
            [42, 4, 9, 0],
            [42, 4, 10, 0],
            [42, 4, 11, 1],
            [42, 4, 12, 1],
            [42, 4, 13, 3],
            [43, 20, 13, 1],
            [43, 20, 14, 2],
            [43, 20, 15, 2],
            [44, 3, 10, 1],
            [44, 3, 11, 1],
            [44, 3, 12, 1],
            [44, 3, 13, 1],
            [44, 3, 14, 1],
            [44, 3, 15, 1],
            [45, 1, 1, 2],
            [46, 1, 1, 2],
            [47, 1, 1, 3],
            [48, 1, 1, 1],
            [49, 1, 1, 0],
            [50, 1, 1, 1],
            [51, 1, 1, 2],
            [52, 1, 1, 2],
            [53, 3, 24, 0],
            [53, 3, 25, 1],
            [54, 3, 24, 1],
            [54, 3, 25, 1],
            [55, 3, 24, 2],
            [55, 3, 25, 1],
            [56, 3, 24, 2],
            [56, 3, 25, 0],
            [57, 15, 1, 5],
            [58, 1, 1, 5],
            [59, 14, 1, 0],
            [60, 14, 1, 5],
            [61, 1, 1, 1],
            [62, 1, 1, 1],
            [63, 1, 1, 1],
            [64, 1, 1, 1],
            [65, 3, 1, 3],
            [66, 3, 1, 0],
            [67, 3, 1, 1],
            [68, 3, 1, 2],
            [69, 3, 1, 2],
            [70, 1, 1, 3],
            [71, 1, 1, 3],
            [72, 1, 1, 3],
            [73, 1, 1, 3],
            [74, 14, 26, 4],
            [74, 14, 18, 4],
            [75, 14, 18, 4],
            [76, 14, 20, 4],
            [77, 5, 18, 4],
            [78, 1, 1, 1],
            [79, 1, 1, 1],
            [80, 1, 1, 1],
            [81, 1, 1, 1],
            [82, 3, 1, 3],
            [83, 3, 1, 3],
            [84, 3, 1, 1],
            [85, 3, 1, 3],
            [86, 3, 1, 3],
            [87, 3, 1, 3],
            [88, 3, 1, 0],
            [89, 3, 1, 3],
            [90, 1, 1, 10],
            [91, 1, 1, 10],
            [92, 1, 1, 10],
            [93, 1, 1, 10],
            [94, 1, 1, 10],
            [95, 1, 1, 10],
            [96, 1, 1, 10],
            [97, 1, 1, 10],
            [98, 1, 1, 10],
            [99, 3, 1, 1],
            [100, 3, 1, 0],
            [101, 3, 1, 2],
            [102, 3, 1, 3],
            [103, 3, 1, 3],
            [104, 3, 1, 3],
            [105, 3, 1, 3],
            [106, 3, 1, 3],
            [107, 3, 1, 3],
            [108, 3, 1, 0],
            [108, 15, 1, 3],
            [109, 3, 21, 0],
            [109, 3, 22, 1],
            [109, 3, 23, 3],
            [110, 3, 21, 1],
            [110, 3, 22, 2],
            [110, 3, 23, 3],
            [111, 3, 21, 3],
            [111, 3, 22, 1],
            [111, 3, 23, 2],
            [112, 3, 21, 0],
            [112, 3, 22, 0],
            [112, 3, 23, 2],
            [113, 1, 1, 5],
            [114, 1, 1, 5],
            [115, 1, 1, 50],
            [116, 1, 1, 50],
            [117, 1, 1, 5],
            [118, 1, 1, 5],
            [119, 1, 1, 100],
            [120, 1, 1, 60],
            [121, 1, 1, 0],
            [122, 1, 1, 2],
            [123, 1, 1, 23],
            [124, 1, 1, 75]
        ];

        foreach ($datos as $dato) {
            DB::table('producto_color_talla')->insert(
                [
                    'id_producto' => $dato[0],
                    'id_color' => $dato[1],
                    'id_talla' => $dato[2],
                    'stock' => $dato[3]
                ]
            );
        }
        /* DB::table('producto_color_talla')->insert(
            [
                ['id_producto' => 1, 'id_color' => 2, 'id_talla' => 3, 'stock' => 1],
                ['id_producto' => 1, 'id_color' => 2, 'id_talla' => 4, 'stock' => 1]
            ]
        ); */
    }
}
