<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array(0 => array(
            'first_name' => 'Verdi',
            'last_name'  => 'Pratama',
            'username'   => 'verdipratama',
            'email'      => 'verdipratama@yahoo.com',
            'password'   => Hash::make('123456'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'is_admin'   => '1',
        ), 1 => array(
            'first_name' => 'John',
            'last_name'  => 'Doe',
            'username'   => 'johndoe',
            'email'      => 'johndoe@gmail.com',
            'password'   => Hash::make('123456'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'is_admin'   => '2',
        )));
    }
}
