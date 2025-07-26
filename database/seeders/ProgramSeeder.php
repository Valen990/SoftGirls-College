<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProgramSeeder extends Seeder
{
    public function run(): void
    {
        $programs =[
            [
                'program_name' => 'Software Development Technology',
                'department' => 3
            ],

            [
                'program_name' => 'Electronics Engineering',
                'department' => 1
            ],

            [
                'program_name' => 'Electrical Engineering',
                'department' => 2
            ],

            [
                'program_name' => 'Textile and Fashion Design Management Technology',
                'department' => 5
            ],

            [
                'program_name' => 'Digital Animation Technology',
                'department' => 6
            ],

            [
                'program_name' => 'Industrial Production Technology',
                'department' => 4
            ]
        ];
        DB::table('program')->insert($programs);
    }
}