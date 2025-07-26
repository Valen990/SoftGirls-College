<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class FacultySeeder extends Seeder
{
    public function run(): void
    {
        $faculties =[
            [
                'faculty_name'=> 'Faculty of Engineering'
            ],

            [
                'faculty_name'=> 'Faculty of Production and Design'
            ]
        ];
        DB::table('faculty')->insert($faculties);
    }
}