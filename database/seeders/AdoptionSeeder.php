<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdoptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Adoptions')->insert([
            'user_id' => '1',
            'hewan_id' => '1',
        ]);

        DB::table('Adoptions')->insert([
            'user_id' => '1',
            'hewan_id' => '2',
        ]);

        DB::table('Adoptions')->insert([
            'user_id' => '2',
            'hewan_id' => '3',
        ]);

        DB::table('Adoptions')->insert([
            'user_id' => '3',
            'hewan_id' => '4',
        ]);

    }

}
