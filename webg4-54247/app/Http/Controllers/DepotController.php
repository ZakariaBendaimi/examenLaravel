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
}