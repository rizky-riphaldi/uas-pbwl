<?php

namespace App\Http\Controllers;

use App\Models\Bayar;
use App\Models\Pelanggan;
use App\Models\Tarif;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class BayarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Bayar::all();
        return view('bayar.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Pelanggan::all();
        $data1 = Tarif::all();
        return view('bayar.add', compact('data', 'data1'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Tarif::find($request->tarif);
        $nama = $data->nama;
        $harga = $data->harga;
        Bayar::create([
            'nama' => $request->nama,
            'tarif' => $nama,
            'total' => $harga
        ]);
        return redirect('/bayar');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bayar  $bayar
     * @return \Illuminate\Http\Response
     */
    public function show(Bayar $bayar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bayar  $bayar
     * @return \Illuminate\Http\Response
     */
    public function edit(Bayar $bayar)
    {
        $data = Pelanggan::all();
        $data1 = Tarif::all();
        return view('bayar.edit', compact('data', 'data1', 'bayar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bayar  $bayar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bayar $bayar)
    {
        $data = Tarif::find($request->tarif);
        $nama = $data->nama;
        $harga = $data->harga;
        $bayar->update([
            'nama' => $request->nama,
            'tarif' => $nama,
            'total' => $harga
        ]);
        return redirect('/bayar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bayar  $bayar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bayar $bayar)
    {
        $bayar->delete();
        return redirect('/bayar');
    }
}
