<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    public function SeeTeachers()
    {
        $teachers = DB::table('teacher')->get(); #select * from teacher
        return view('Teachers.Listing', compact('teachers'));
    }
}