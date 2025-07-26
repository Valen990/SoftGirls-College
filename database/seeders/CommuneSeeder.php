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
                'commune_name' => 'Softgirls: programming seedbed'
            ],

            [
                'commune_name' => 'PAAP tutorials'
            ],

            [
                'commune_name'=> 'Pascualinos Entrepreneurs Network'
            ],

            [
                'commune_name' => 'Dance Club'
            ]
        ];
        DB::table('commune')->insert($communes);
    }
}