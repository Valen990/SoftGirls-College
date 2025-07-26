<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ScoreSeeder extends Seeder
{
    public function run(): void
    {
        $scores =[
            [
                'subject' => 1,
                'teacher' => 5,
                'student' => 3,
                'score1' => 3.5,
                'score2' => 4.0,
                'score3' => 3.8,
                'final_score' => 3.8,
                'state' => 'P'
            ],

            [
                'subject' => 3,
                'teacher' => 2,
                'student' => 2,
                'score1' => 3.2,
                'score2' => 4.5,
                'score3' => 3.0,
                'final_score' => 3.6,
                'state' => 'P'
            ],

            [
                'subject' => 2,
                'teacher' => 4,
                'student' => 1,
                'score1' => 5.0,
                'score2' => 3.6,
                'score3' => 3.0,
                'final_score' => 3.9,
                'state' => 'P'
            ],

            [
                'subject' => 4,
                'teacher' => 3,
                'student' => 5,
                'score1' => 4.5,
                'score2' => 3.3,
                'score3' => 3.2,
                'final_score' => 3.7,
                'state' => 'P'
            ],

            [
                'subject' => 1,
                'teacher' => 5,
                'student' => 4,
                'score1' => 3.0,
                'score2' => 3.5,
                'score3' => 3.9,
                'final_score' => 3.5,
                'state' => 'P'
            ]
        ];
        DB::table('score')->insert($scores);
    }
}