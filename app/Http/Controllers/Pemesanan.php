<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PemesananModel;

class Pemesanan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = PemesananModel::all();
        return view('pemesanan',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pemesanan_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new PemesananModel();
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->nohp = $request->nohp;
        $data->tglpesan = $request->tglpesan;
        $data->namabarang = $request->namabarang;
        $data->jmlhpesanan = $request->jmlhpesanan;
        $data->harga = $request->harga;
        $data->save();
        return redirect()->route('pemesanan.index')->with('alert-success','Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = PemesananModel::findOrFail($id);
        return view('editpemesanan',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = PemesananModel::findOrFail($id);
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->nohp = $request->nohp;
        $data->tglpesan = $request->tglpesan;
        $data->namabarang = $request->namabarang;
        $data->jmlhpesanan = $request->jmlhpesanan;
        $data->harga = $request->harga;
        $data->save();
        return redirect()->route('pemesanan.index')->with('alert-success','Data berhasi diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = PemesananModel::where('id',$id)->first();
        $data->delete();
        return redirect()->route('pemesanan.index')->with('alert-succes','Data berhasil dihapus !!!'); 
    }
}
