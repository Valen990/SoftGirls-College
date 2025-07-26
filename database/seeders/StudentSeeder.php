<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        $students =[
            [
                'student_name' => 'Juan Manuel Agudelo Zapata',
                'student_gender' => 'M',
                'student_age' => 21,
                'student_email' => 'juan@gmail.com',
                'student_phone' => '3054790969',
                'program' => 1,
                'neighborhood' => 3
            ],

            [
                'student_name' => 'Ximena Andrea Cardona López',
                'student_gender' => 'F',
                'student_age' => 17,
                'student_email' => 'ximena@gmail.com',
                'student_phone' => '3103562398',
                'program' => 1,
                'neighborhood' => 1
            ],

            [
                'student_name' => 'Valentina Torres Banquez',
                'student_gender' => 'F',
                'student_age' => 18,
                'student_email' => 'valen@gmail.com',
                'student_phone' => '3002912042',
                'program' => 1,
                'neighborhood' => 1
            ],

            [
                'student_name' => 'Valeria Isabel Torres Banquez',
                'student_gender' => 'F',
                'student_age' => 15,
                'student_email' => 'vale@gmail.com',
                'student_phone' => '3005678342',
                'program' => 5,
                'neighborhood' => 2
            ],

            [
                'student_name' => 'Sebastián Andrée Castillo Ramírez',
                'student_gender' => 'M',
                'student_age' => 16,
                'student_email' => 'sebastian@gmail.com',
                'student_phone' => '3154784466',
                'program' => 1,
                'neighborhood' => 1
            ]
        ];
        DB::table('student')->insert($students);
    }
}