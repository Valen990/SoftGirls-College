<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SubjectSeeder extends Seeder
{
    public function run(): void
    {
        $subjects =[
            [
                'subject_name' => 'Logical and Mathematical Reasoning',
                'credits' => 4
            ],

            [
                'subject_name' => 'Basic Electronics',
                'credits' => 2
            ],

            [
                'subject_name' => 'General Systems Theory',
                'credits' => 2
            ],

            [
                'subject_name' => 'Programming Tools 2',
                'credits' => 4
            ],
        ];
        DB::table('subject')->insert($subjects);
    }
}