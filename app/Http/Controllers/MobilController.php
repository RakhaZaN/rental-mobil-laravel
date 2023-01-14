<?php

namespace App\Http\Controllers;

use App\Models\Merk;
use App\Models\MerkMobil;
use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    public function index()
    {
        $list_mobil = MerkMobil::all();
        // return $list_mobil;

        return view('mobil.index', compact('list_mobil'));
    }

    public function create()
    {
        $merk = Merk::all();
        return view('mobil.add', compact('merk'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->storeAs('mobil', $request->nopol . '.png');
        }
        // return $data;

        Mobil::create($data);

        return redirect(route('mobil.index'));
    }

    public function show(MerkMobil $detail)
    {
        return view('mobil.view', compact('detail'));
    }

    public function edit(MerkMobil $edit)
    {
        $merk = Merk::all();
        return view('mobil.update', compact('edit', 'merk'));
    }

    public function update(Request $request, Mobil $edit)
    {
        $data = $request->except('foto');

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->storeAs('mobil', $request->nopol . '.png', [
                'overwrite' => true
            ]);
        }

        $edit->update($data);
        return redirect(route('mobil.index'));
    }

    public function delete(Mobil $delete)
    {
        $delete->delete();
        return redirect()->back();
    }
}
