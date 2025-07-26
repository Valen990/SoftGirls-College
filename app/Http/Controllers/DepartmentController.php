<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DepartmentController extends Controller
{
    public function SeeDepartments()
    {
        $departments = DB::table('department')->get(); #select * from department
        return view('Departments.Listing', compact('departments'));
    }
}