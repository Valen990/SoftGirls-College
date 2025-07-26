<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class NeighborhoodController extends Controller
{
    public function SeeNeighborhoods()
    {
        $neighborhoods = DB::table('neighborhood')->get(); #select * from neighborhood
        return view('Neighborhoods.Listing', compact('neighborhoods'));
    }
}