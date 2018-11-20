<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FashionModel;

class fashion extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = FashionModel::all();
        return view('fashion',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fashion_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new FashionModel();
        $gambar = $request->file('gambar');
        $ext = $gambar->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$ext;
        $gambar->move('uploads/file',$newName);
        $data->gambar = $newName;
        $data->jenis = $request->jenis;
        $data->merk = $request->merk;
        $data->harga = $request->harga;
        $data->save();
        return redirect()->route('fashion.index')->with('alert-success','Data berhasil ditambahkan!');
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
        $data = FashionModel::findOrFail($id);
        return view('editfashion',compact('data'));
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
        $data = FashionModel::findOrFail($id);
        if(empty($request->file('gambar'))){
            $data->gambar = $data->gambar;
        }else{
            unlink('uploads/file/'.$data->gambar); //menghapus file lama
            $gambar = $request->file('gambar');
            $ext = $gambar->getClientOriginalExtension();
            $newName = rand(100000,1001238912).".".$ext;
            $gambar->move('uploads/file',$newName);
            $data->gambar = $newName;
        }
        $data->jenis = $request->jenis;
        $data->merk = $request->merk;
        $data->harga = $request->harga;
        $data->save();
        return redirect()->route('fashion.index')->with('alert-success','Data berhasi diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = FashionModel::findOrFail($id);
        if($data->delete()){
            unlink('uploads/file/'.$data->gambar); //menghapus file lama
        }
        return redirect()->route('fashion.index')->with('alert-success','Data berhasil dihapus!');
    }
}
