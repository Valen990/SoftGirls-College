<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ScoreController extends Controller
{
    public function SeeScores()
    {
        $scores = DB::table('score')->get(); #select * from score
        return view('Scores.Listing', compact('scores'));
    }
}