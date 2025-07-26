<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class NeighborhoodSeeder extends Seeder
{
    public function run(): void
    {
        $neighborhoods =[
            [
                'neighborhood_name' => 'Robledo',
                'commune' => 1
            ],

            [
                'neighborhood_name' => 'C4TA',
                'commune' => 4
            ],

            [
                'neighborhood_name' => 'San Javier',
                'commune' => 3
            ]
        ];
        DB::table('neighborhood')->insert($neighborhoods);
    }
}