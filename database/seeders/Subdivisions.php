<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FarNorthSubdivisionsSeeder extends Seeder
{
    public function run()
    {
        $subdivisions = [
            // Logone-et-Chari Division (division_id 1)
            ['division_id' => 1, 'name' => 'Kousséri'],
            ['division_id' => 1, 'name' => 'Makary'],
            ['division_id' => 1, 'name' => 'Goulfey'],
            ['division_id' => 1, 'name' => 'Blangoua'],
            ['division_id' => 1, 'name' => 'Yagoua'],
            ['division_id' => 1, 'name' => 'Djakiri'],
            ['division_id' => 1, 'name' => 'Ndjamena'],
            ['division_id' => 1, 'name' => 'Dourbali'],
            ['division_id' => 1, 'name' => 'Nguigmi'],
            ['division_id' => 1, 'name' => 'Bodo'],
            ['division_id' => 1, 'name' => 'Mayo-Tsanaga'],

            // Mayo-Danay Division (division_id 2)
            ['division_id' => 2, 'name' => 'Yagoua'],
            ['division_id' => 2, 'name' => 'Kalfou'],
            ['division_id' => 2, 'name' => 'Datcheka'],
            ['division_id' => 2, 'name' => 'Mayo-Oulo'],
            ['division_id' => 2, 'name' => 'Doukoula'],
            ['division_id' => 2, 'name' => 'Dadi'],
            ['division_id' => 2, 'name' => 'Gazawa'],
            ['division_id' => 2, 'name' => 'Goubé'],

            // Mayo-Sava Division (division_id 3)
            ['division_id' => 3, 'name' => 'Maroua'],
            ['division_id' => 3, 'name' => 'Mokolo'],
            ['division_id' => 3, 'name' => 'Koza'],
            ['division_id' => 3, 'name' => 'Mora'],
            ['division_id' => 3, 'name' => 'Waza'],
            ['division_id' => 3, 'name' => 'Ngouré'],
            ['division_id' => 3, 'name' => 'Mayo-Sava'],
            ['division_id' => 3, 'name' => 'Furu Awa'],
            ['division_id' => 3, 'name' => 'Bodo'],
            ['division_id' => 3, 'name' => 'Minta'],
            ['division_id' => 3, 'name' => 'Pouss'],

            // Mandara Division (division_id 4)
            ['division_id' => 4, 'name' => 'Mokolo'],
            ['division_id' => 4, 'name' => 'Mora'],
            ['division_id' => 4, 'name' => 'Koza'],
            ['division_id' => 4, 'name' => 'Waza'],
            ['division_id' => 4, 'name' => 'Bogo'],
            ['division_id' => 4, 'name' => 'Mbandjok'],
            ['division_id' => 4, 'name' => 'Rumo'],
        ];

        DB::table('subdivision')->insert($subdivisions);
    }
}