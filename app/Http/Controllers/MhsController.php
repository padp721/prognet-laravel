<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MhsFormRequest;
use App\Mhs;
use App\Mhs_Hobi;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class MhsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = DB::table('mhs')
            ->join('mhs_hobi', 'mhs.nim', '=', 'mhs_hobi.mhs')
            ->join('hobi', 'mhs_hobi.hobi', '=', 'hobi.id')
            ->select(DB::raw('mhs.nim as nim, mhs.nama as nama, mhs.alamat as alamat, mhs.tgl_lahir as tgl_lahir, mhs.agama as agama, mhs.jk as jk, GROUP_CONCAT(DISTINCT hobi.hobi SEPARATOR ", ") as hobi'))
            ->groupBy('nim')
            ->get();
        return view('mahasiswa.mhs', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('mahasiswa.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MhsFormRequest $request)
    {
        //
        $cek_nim = Mhs::whereNim($request->get('nim'))->first();
        if($cek_nim){
            return redirect('/mahasiswa/tambah')->with('nim', 'Maaf, NIM anda telah terdaftar!');
        }
        else{
        $data = new Mhs(array(
            'nim' => $request->get('nim'),
            'nama' => $request->get('nama'),
            'alamat' => $request->get('alamat'),
            'tgl_lahir' => $request->get('tgl'),
            'agama' => $request->get('agama'),
            'jk' => $request->get('jk'),
        ));
        $data->save();
    
        $hobies = Input::get('hobi');
        foreach($hobies as $hobi){
            DB::insert('INSERT INTO mhs_hobi (mhs,hobi) VALUES (?, ?)', array($request->get('nim'), $hobi));
        }
    
        return redirect('/mahasiswa')->with('status', 'Data anda berhasil ditambahkan!');
        }
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
    public function edit($nim)
    {
        //
        $data = Mhs::whereNim($nim)->firstOrFail();
        $data2 = Mhs_Hobi::whereMhs($nim)->get();

        return view('mahasiswa.edit', compact('data', 'data2'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MhsFormRequest $request, $nim)
    {
        //
        $data = Mhs::whereNim($nim)->firstOrFail();
        $data->nim = $request->get('nim');
        $data->nama = $request->get('nama');
        $data->alamat = $request->get('alamat');
        $data->tgl_lahir = $request->get('tgl');
        $data->agama = $request->get('agama');
        $data->jk = $request->get('jk');
        $data->save();
        $deletfirst = Mhs_Hobi::whereMhs($nim)->delete();
        $hobies = Input::get('hobi');
        foreach($hobies as $hobi){
            DB::insert('INSERT INTO mhs_hobi (mhs,hobi) VALUES (?, ?)', array($request->get('nim'), $hobi));
        }

        return redirect('/mahasiswa')->with('status', 'Data berhasil diubah!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nim)
    {
        //
        $data = Mhs::whereNim($nim)->firstOrFail();
        $data->delete();
        $hobi = Mhs_Hobi::whereMhs($nim)->delete();
        return redirect('/mahasiswa')->with('status', 'Data berhasil dihapus!');
    }
}
