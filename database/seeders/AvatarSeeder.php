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
                'avatar' => 'baku.jpg',
                'name' => 'Bakugo'
            ],
            [
                'avatar' => 'bat.jpg',
                'name' => 'Batman'
            ],
            [
                'avatar' => 'break.jpg',
                'name' => 'Breaking Bad'
            ],
        ]);
    }
}
