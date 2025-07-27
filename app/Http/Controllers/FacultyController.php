<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class FacultyController extends Controller
{
    public function SeeFaculties()
    {
        $faculties = DB::table('faculty')->get(); // select * from faculty
        return view('Faculties.Listing', compact('faculties'));
    }
}