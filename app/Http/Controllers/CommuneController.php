<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CommuneController extends Controller
{
    public function SeeCommunes()
    {
        $communes = DB::table('commune')->get(); #select * from commune
        return view('Communes.Listing', compact('communes'));
    }
}