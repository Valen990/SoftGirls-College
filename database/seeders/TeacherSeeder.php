<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TeacherSeeder extends Seeder
{
    public function run(): void
    {
        $teachers =[
            [
                'teacher_name' => 'Sandra Marcela Guerrero Calvache',
                'teacher_email' => 'profesandra@pascualbravo.edu.co',
                'teacher_phone' => '3125567897',
                'teacher_gender' => 'F',
                'department' => 1
            ],

            [
                'teacher_name' => 'Edwin Ferney Barragan Muñoz',
                'teacher_email' => 'profesedwin@pascualbravo.edu.co',
                'teacher_phone' => '3214443214',
                'teacher_gender' => 'M',
                'department' => 1
            ],

            [
                'teacher_name' => 'Yexid Montenegro García',
                'teacher_email' => 'profeyexid@pascualbravo.edu.co',
                'teacher_phone' => '3245997821',
                'teacher_gender' => 'M',
                'department' => 1
            ],

            [
                'teacher_name' => 'Maria Victoria Herrera Dederle',
                'teacher_email' => 'profeyexid@pascualbravo.edu.co',
                'teacher_phone' => '3245997821',
                'teacher_gender' => 'F',
                'department' => 3
            ],

            [
                'teacher_name' => 'Linda Marcela Rivera Guerrero',
                'teacher_email' => 'profelinda@pascualbravo.edu.co',
                'teacher_phone' => '3234564325',
                'teacher_gender' => 'F',
                'department' => 1
            ]
        ];
        DB::table('teacher')->insert($teachers);
    }
}