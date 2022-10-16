<?php

namespace App\Http\Controllers;

use App\Models\Kerajinan;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class kerajinanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kerajinans = Kerajinan::all();
        return view('kerajinan.kerajinan',['kerajinans' => $kerajinans]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kerajinan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Kerajinan $kerajinans)
    {
        $validateData = $request->validate([
            'nama'   => 'required|min:3|max:30',
            'jenis'  => 'required',
            'bahan'  => 'required',
            'detail' => '',
            'foto' => '',
            'harga'  => 'required',
            // 'foto' => 'file|image|max:5000'
        ]);


        // //Validasi Photo
        // $request->validate([
        //     'foto' => 'file|max:5000',
        // ]);

        // // $extFile = $request->foto->getClientOriginalExtension();
        // $namaFile = $validateData['jenis']."."."png";
        // $path = $request->foto->move('foto', $namaFile);
        // echo "Variabel path berisi: $path <br>";
        // $pathbaru = asset('storage/'.$namaFile);

        //Mass Assignment
        $kerajinans = new Kerajinan;
        $kerajinans->nama = $request['nama'];
        $kerajinans->jenis = $request['jenis'];
        $kerajinans->bahan = $request['bahan'];
        $kerajinans->detail = $request['detail'];
        $kerajinans->foto = $request['foto'];
        $kerajinans->harga = $request['harga'];
        $file = $validateData['foto'];
        $extension = $file->getClientOriginalExtension();
        $filename = 'produk-'.time().'.'.$extension;
        $file -> move (public_path().'/image',$filename);
        $kerajinans->foto = $filename;

        $kerajinans->save();

        $request->session()->flash('pesan', "Tambah data {$validateData['nama']} berhasil");
        return redirect()->route('kerajinan.index');
    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(kerajinan $kerajinan)
    {
        return view('kerajinan.show',['kerajinan'=>$kerajinan]);
    }
    public function show2(kerajinan $kerajinan)
    {
        return view('kerajinan.show2',['kerajinan'=>$kerajinan]);
    }
    public function index2()
    {
        $kerajinans = Kerajinan::all();
        return view('kerajinan.index',['kerajinans'=>$kerajinans]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Kerajinan $kerajinan)
    {
        return view('kerajinan.edit', ['kerajinan'=> $kerajinan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kerajinan $kerajinan)
    {
        $validateData = $request->validate([
            'nama'   => 'required|min:3|max:30',
            'jenis'  => 'required',
            'bahan'  => 'required',
            'detail' => '',
            'foto' => '',
            'harga'  => 'required',
        ]);

        Kerajinan::where('id', $kerajinan->id)->update($validateData);
        if($request->hasFile('foto')){
            $request->file('foto')->move('image/',$request->file('foto')->getClientOriginalName());
            $kerajinan->foto = $request->file('foto')->getClientOriginalName();
            $kerajinan->save();
        }
        return redirect()->route('kerajinan.show2', ['kerajinan'=>$kerajinan->id])
        ->with('pesan', "Update data {$validateData['nama']} berhasil");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kerajinan $kerajinan)
    {
        $kerajinan->delete();
        return redirect()->route('kerajinan.index')
        ->with('hapus', "Hapus data $kerajinan->nama berhasil");
    }
    public function tas(){
        $result = DB::table('kerajinans')
        ->where('jenis','=','tas')->get();
        return view('kerajinan.kerajinan-cari', ["kerajinans"=>$result]);
    }

    public function vas(){
        $result = DB::table('kerajinans')
        ->where('jenis','=','vas')->get();
        return view('kerajinan.kerajinan-cari', ["kerajinans"=>$result]);
    }

    public function pigura(){
        $result = DB::table('kerajinans')
        ->where('jenis','=','pigura')->get();
        return view('kerajinan.kerajinan-cari', ["kerajinans"=>$result]);
    }

    public function lainnya1(){
        $result = DB::table('kerajinans')
        ->where('jenis','=','lainnya')->get();
        return view('kerajinan.kerajinan-cari', ["kerajinans"=>$result]);
    }

    public function kertas(){
        $result = DB::table('kerajinans')
        ->where('bahan','=','kertas')->get();
        return view('kerajinan.kerajinan-cari', ["kerajinans"=>$result]);
    }

    public function plastik(){
        $result = DB::table('kerajinans')
        ->where('bahan','=','plastik')->get();
        return view('kerajinan.kerajinan-cari', ["kerajinans"=>$result]);
    }

    public function lainnya2(){
        $result = DB::table('kerajinans')
        ->where('bahan','=','lainnya')->get();
        return view('kerajinan.kerajinan-cari', ["kerajinans"=>$result]);
    }

    public function search(Request $request, Kerajinan $id){
        $search = $request->search;
        $request = DB::table("kerajinans")->where('nama','like',"%".$search."%")->paginate();
        return view('kerajinan.kerajinan-cari',compact('id'), ["kerajinans"=>$request]);
    }
}
