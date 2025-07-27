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
                'neighborhood_name' => 'Santo Domingo',
                'commune' => 1
            ],

            [
                'neighborhood_name' => 'Moravia',
                'commune' => 4
            ],

            [
                'neighborhood_name' => 'La Salle',
                'commune' => 3
            ],

            [
                'neighborhood_name' => 'La Isla',
                'commune' => 2
            ]
        ];
        DB::table('neighborhood')->insert($neighborhoods);
    }
}