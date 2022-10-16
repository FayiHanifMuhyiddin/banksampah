<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class mitraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mitras = Mitra::all();
        return view('mitra.index',['mitras' => $mitras]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mitra.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Mitra $mitra)
    {
        $validateData = $request->validate([
            'nama'          => 'required|min:3|max:30',
            'email'         => 'required',
            'telepon'       => 'required',
            'alamat'        => '',
            'jenis_kelamin' => '',
            'tanggal_lahir' => 'required'
        ]);

        //Mass Assignment
        $mitra = new Mitra;
        $mitra->nama = $request['nama'];
        $mitra->email = $request['email'];
        $mitra->telepon = $request['telepon'];
        $mitra->alamat = $request['alamat'];
        $mitra->jenis_kelamin = $request['jenis_kelamin'];
        $mitra->tanggal_lahir = $request['tanggal_lahir'];
 
        $mitra->save();
 
        $request->session()->flash('pesan', "Tambah data {$validateData['nama']} berhasil");
        return redirect()->route('mitra.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(mitra $mitras)
    {
        // return view('mitra.show',['mitra'=>$mitras]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Mitra $mitra)
    {
        return view('mitra.edit', ['mitra'=> $mitra]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mitra $mitra)
    {
        $validateData = $request->validate([
            'nama'          => 'required|min:3|max:30',
            'email'         => 'required',
            'telepon'       => 'required',
            'alamat'        => '',
            'jenis_kelamin' => '',
            'tanggal_lahir' => 'required'
        ]);

        Mitra::where('id', $mitra->id)->update($validateData);
 
        $request->session()->flash('pesan', "Edit data {$validateData['nama']} berhasil");
        return redirect()->route('mitra.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mitra $mitra)
    {
        $mitra->delete();
        return redirect()->route('mitra.index')
        ->with('hapus', "Hapus data $mitra->nama berhasil");
    }
}
