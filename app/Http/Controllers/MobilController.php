<?php

namespace App\Http\Controllers;

use App\Models\Merk;
use App\Models\MerkMobil;
use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    public function index(){
            $list_mobil = MerkMobil::all();
        // return $list_mobil;

        return view('mobil.index', compact('list_mobil'));
    }

    public function show(MerkMobil $detail)
    {
        return view('mobil.view',compact('detail'));

    }

    public function edit(MerkMobil $edit)
    {
        $merk = Merk::all();
        return view('mobil.update', compact('edit','merk'));
    }

    public function update(Request $request, Mobil $edit)
    {
        $edit->update($request->all());
        return redirect('/mobil');
    }

    public function delete(Mobil $delete)
    {
        $delete->delete();
        return redirect('/mobil');
    }
}
