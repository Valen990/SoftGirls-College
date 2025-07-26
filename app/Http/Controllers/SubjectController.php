<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SubjectController extends Controller
{
    public function SeeSubjects()
    {
        $subjects = DB::table('subject')->get(); #select * from subject
        return view('Subjects.Listing', compact('subjects'));
    }
}