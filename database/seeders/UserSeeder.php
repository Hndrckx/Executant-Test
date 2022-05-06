<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        DB::table('users')->insert([
            [
                'name' => 'Hndrckx',
                'firstName' => 'Anthony',
                'age' => '27',
                'avatar_id' => 2,
                'role_id' => 1,
                'email' => 'ah@gmail.com',
                'password' => Hash::make('ah@gmail.com')
            ],
            [
                'name' => 'Bond',
                'firstName' => 'James',
                'age' => '32',
                'avatar_id' => 2,
                'role_id' => 2,
                'email' => 'jb@gmail.be',
                'password' => Hash::make('jb@gmail.be')
            ]
        ]);
    }
}
