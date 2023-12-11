<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HewanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hewans')->insert([
            'name' => 'Boby',
            'breed' => 'Domestic',
            'colour' => 'yellow',
            'age' => 'young',
            'weight' => 5,
            'sex' => true,
            'kategoris_id' => 1
        ]);

        DB::table('hewans')->insert([
            'name' => 'Arthur',
            'breed' => 'Snowshoe',
            'colour' => 'Brown with White',
            'age' => 'young',
            'weight' => 5,
            'sex' => true,
            'kategoris_id' => 1
        ]);

        DB::table('hewans')->insert([
            'name' => 'Ciko',
            'breed' => 'Domestic Cat',
            'colour' => 'Brown',
            'age' => 'young',
            'weight' => 2,
            'sex' => true,
            'kategoris_id' => 1
        ]);

        DB::table('hewans')->insert([
            'name' => 'Stiff',
            'breed' => 'Snowshoe',
            'colour' => 'Brown with White',
            'age' => 'young',
            'weight' => 5,
            'sex' => true,
            'kategoris_id' => 2
        ]);

        DB::table('hewans')->insert([
            'name' => 'Valen',
            'breed' => 'Boston Terriere',
            'colour' => 'Brown with White',
            'age' => 'young',
            'weight' => 8.5,
            'sex' => false,
            'kategoris_id' => 2
        ]);

        DB::table('hewans')->insert([
            'name' => 'Puffy',
            'breed' => 'Kintamani Dog',
            'colour' => 'Black',
            'age' => 'young',
            'weight' => 7,
            'sex' => true,
            'kategoris_id' => 2
        ]);

        DB::table('hewans')->insert([
            'name' => 'Yemia',
            'breed' => 'Moggy',
            'colour' => 'Black with White',
            'age' => 'young',
            'weight' => 5,
            'sex' => false,
            'kategoris_id' => 1
        ]);

        DB::table('hewans')->insert([
            'name' => 'Gery',
            'breed' => 'Beagle',
            'colour' => 'Brown with White',
            'age' => 'young',
            'weight' => 4,
            'sex' => true,
            'kategoris_id' => 2
        ]);

        DB::table('hewans')->insert([
            'name' => 'Oci',
            'breed' => 'Pudel',
            'colour' => 'Brown',
            'age' => 'young',
            'weight' => 4.5,
            'sex' => true,
            'kategoris_id' => 2
        ]);
    }
}
