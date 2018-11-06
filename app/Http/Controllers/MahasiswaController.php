<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Prodi;
use App\Mahasiswa;


class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Mahasiswa::all();

        return view('prodi_mahasiswa.index')
            ->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $prodi = Prodi::all();
        return view('prodi_mahasiswa.create')
            ->with('prodi', $prodi);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = new Mahasiswa();
        $data->nim = $request->nim;
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->prodi_id = $request->prodi;
        $data->save();
        return redirect('/prodi_mahasiswa')->with('status', 'Data berhasil ditambahkan!');
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
        //
        $data = Mahasiswa::where('id', $id)->firstOrFail();
        $prodi = Prodi::all();
        return view('prodi_mahasiswa.edit')
            ->with('data', $data)
            ->with('prodi', $prodi);

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
        //
        $data = Mahasiswa::where('id', $id)->firstOrFail();
        $data->nim = $request->nim;
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->prodi_id = $request->prodi;
        $data->save();
        return redirect('/prodi_mahasiswa')->with('status', 'Data berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = Mahasiswa::where('id', $id)->firstOrFail();
        $data->delete();
        return redirect('/prodi_mahasiswa')->with('status', 'Data berhasil dihapus!');
    }
}
