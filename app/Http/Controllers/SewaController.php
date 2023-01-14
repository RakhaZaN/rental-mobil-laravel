<?php

namespace App\Http\Controllers;

use App\Models\DaftarSewa;
use App\Models\Mobil;
use App\Models\Sewa;
use Illuminate\Http\Request;

class SewaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $daftar_sewa = DaftarSewa::all();
        // return $daftar;

        return view('sewa.index', compact('daftar_sewa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $mobil = Mobil::where('nopol', $request->nopol)->first();
        // return $mobil;

        return view('sewa.book', compact('mobil'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'tanggal_mulai' => 'required|date|before_or_equal:tanggal_akhir',
            'tanggal_akhir' => 'required|date|after_or_equal:tanggal_mulai',
            'tujuan' => 'required|string',
            'noktp' => 'required|string',
            'user_id' => 'required|exists:users,id',
            'mobil_id' => 'required|exists:mobil,id'
        ]);

        $create = Sewa::create($validate);

        if ($create) {
            return redirect(route('sewa.index'));
        }

        return redirect(back());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sewa  $sewa
     * @return \Illuminate\Http\Response
     */
    public function show(Sewa $sewa)
    {
        return $sewa;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sewa  $sewa
     * @return \Illuminate\Http\Response
     */
    public function edit(Sewa $sewa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sewa  $sewa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sewa $sewa)
    {
        $validate = $request->validate([
            'tanggal_mulai' => 'date|before_or_equal:tanggal_akhir',
            'tanggal_akhir' => 'date|after_or_equal:tanggal_mulai',
            'tujuan' => 'string',
            'noktp' => 'string',
            // 'user_id' => '',
            // 'mobil_id' => ''
        ]);

        $update = $sewa->update($validate, ['id' => $sewa->id]);

        if ($update) {
            return $update;
        }

        return false;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sewa  $sewa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sewa $sewa)
    {
        $delete = $sewa->delete();

        return $delete;
    }
}
