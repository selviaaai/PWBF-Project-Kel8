<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'fullname' => 'user1',
            'email' => 'user1@gmail.com',
            'phone_number' => '085616109780',
            'username' => 'userrr1',
            'password' => bcrypt('user123'),
            'role' => 'customer'
        ]);



        DB::table('users')->insert([
            'fullname' => 'admin1',
            'email' => 'admin1@gmail.com',
            'phone_number' => '085646100111',
            'username' => 'adminnn1',
            'password' => bcrypt('admin123'),
            'role' => 'admin'
        ]);

        DB::table('users')->insert([
            'fullname' => 'tes',
            'email' => 'tes@gmail.com',
            'phone_number' => '085646100111',
            'username' => 'tes123',
            'password' => bcrypt('tes123'),
            'role' => 'customer'
        ]);
    }
}
