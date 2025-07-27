<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CommuneSeeder extends Seeder
{
    public function run(): void
    {
        $communes =[
            [
                'commune_name' => 'Popular'
            ],

            [
                'commune_name' => 'Santa Cruz'
            ],

            [
                'commune_name'=> 'Manrique'
            ],

            [
                'commune_name' => 'Aranjuez'
            ]
        ];
        DB::table('commune')->insert($communes);
    }
}