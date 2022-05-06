<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AvatarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('avatars')->insert([
            [
                'avatar' => 'eren.jpeg',
                'name' => 'Eren Jeager'
            ],
            [
                'avatar' => 'gyomei.jpeg',
                'name' => 'Gyomei Himejima'
            ],
            [
                'avatar' => 'megumi.jpeg',
                'name' => 'Megumi Fushiguro'
            ],
        ]);
    }
}
