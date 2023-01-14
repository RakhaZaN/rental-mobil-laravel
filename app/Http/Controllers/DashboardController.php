<?php

namespace App\Http\Controllers;

use App\Models\MerkMobil;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function landing()
    {
        $list_mobil = MerkMobil::all();
        return view('dashboard', compact('list_mobil'));
    }
}
