<?php

namespace App\Http\Controllers;

use App\Models\Depot;
use Illuminate\Http\Request;

class DepotController extends Controller
{
    public function index()
    {
        $depots = Depot::getAllDepots();
        return view('depots', ["depots" => $depots]);
    }

    public function getDepot($id)
    {
        $depot = Depot::selectDepot($id);
        $names = Depot::selectNames($id);
        array_push($names, $depot);
        return response()->json($names);
    }
}