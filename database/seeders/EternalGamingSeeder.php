<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class EternalGamingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('eternalgaming')->insert([
            ['name' => 'Resident_Evil', 'subtitle' => 'Requiem', 'developer' => 'CAPCOM', 'releaseDate' => '2026-02-27', 'category' => 'Supervivencia_terror', 'price' => '70', 'stock' => '120'],
            ['name' => 'Grand_Theft_Auto_VI',  'subtitle' => null, 'developer' => 'Rockstar_Games', 'releaseDate' => '2026-04-26', 'category' => 'Aventura_Acción_Sandbox', 'price' => '120', 'stock' => '500'],
        ]);
    }
}