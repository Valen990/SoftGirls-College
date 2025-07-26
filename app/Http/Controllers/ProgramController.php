<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProgramController extends Controller
{
    public function SeePrograms()
    {
        $programs = DB::table('program')->get(); #select * from program
        return view('Programs.Listing', compact('programs'));
    }
}