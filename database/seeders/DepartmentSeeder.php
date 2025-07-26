<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DepartmentSeeder extends Seeder
{
    public function run(): void
    {
        $departments =[
            [
                'department_name' => 'Software Development and Multimedia Department',
                'faculty'=> 1
            ],

            [
                'department_name' => 'Energy and Electricity Department',
                'faculty' => 1
            ],

                        [
                'department_name' => 'Electronics and Automation Department',
                'faculty' => 1
            ],

            [
                'department_name' => 'Production and Manufacturing Department',
                'faculty' => 2
            ],

            [
                'department_name' => 'Fashion and Textile Department',
                'faculty' => 2
            ],

            [
                'department_name' => 'Graphic and Digital Design Department',
                'faculty' => 2
            ]
        ];
        DB::table('department')->insert($departments);
    }
}