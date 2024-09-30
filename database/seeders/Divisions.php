<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisionsTableSeeder extends Seeder
{
    public function run()
    {
        $divisions = [
            // Adamawa
            ['region_id' => 1, 'name' => 'Djérem'],
            ['region_id' => 1, 'name' => 'Faro-et-Déo'],
            ['region_id' => 1, 'name' => 'Mayo-Banyo'],
            ['region_id' => 1, 'name' => 'Mbéré'],
            ['region_id' => 1, 'name' => 'Vina'],

            // Centre
            ['region_id' => 2, 'name' => 'Haute-Sanaga'],
            ['region_id' => 2, 'name' => 'Lékié'],
            ['region_id' => 2, 'name' => 'Mbam-et-Inoubou'],
            ['region_id' => 2, 'name' => 'Mbam-et-Kim'],
            ['region_id' => 2, 'name' => 'Méfou-et-Afamba'],
            ['region_id' => 2, 'name' => 'Méfou-et-Akono'],
            ['region_id' => 2, 'name' => 'Mfoundi'],
            ['region_id' => 2, 'name' => 'Nyong-et-Kéllé'],
            ['region_id' => 2, 'name' => 'Nyong-et-Mfoumou'],
            ['region_id' => 2, 'name' => 'Nyong-et-So’o'],

            // East
            ['region_id' => 3, 'name' => 'Boumba-et-Ngoko'],
            ['region_id' => 3, 'name' => 'Haut-Nyong'],
            ['region_id' => 3, 'name' => 'Kadey'],
            ['region_id' => 3, 'name' => 'Lom-et-Djérem'],

            // Far North
            ['region_id' => 4, 'name' => 'Diamaré'],
            ['region_id' => 4, 'name' => 'Logone-et-Chari'],
            ['region_id' => 4, 'name' => 'Mayo-Danay'],
            ['region_id' => 4, 'name' => 'Mayo-Kani'],
            ['region_id' => 4, 'name' => 'Mayo-Sava'],
            ['region_id' => 4, 'name' => 'Mayo-Tsanaga'],

            // Littoral
            ['region_id' => 5, 'name' => 'Moungo'],
            ['region_id' => 5, 'name' => 'Nkam'],
            ['region_id' => 5, 'name' => 'Sanaga-Maritime'],
            ['region_id' => 5, 'name' => 'Wouri'],

            // Other regions...
            // Add all divisions for each region with their respective 'region_id'
        ];

        DB::table('division')->insert($divisions);
    }
}
