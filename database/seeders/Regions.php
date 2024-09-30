<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Regions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $regions = [
            ['name' => 'Adamawa'],
            ['name' => 'Centre'],
            ['name' => 'East'],
            ['name' => 'Far North'],
            ['name' => 'Littoral'],
            ['name' => 'North'],
            ['name' => 'Northwest'],
            ['name' => 'South'],
            ['name' => 'Southwest'],
            ['name' => 'West'],
        ];

        DB::table('region')->insert($regions);
    }
}
