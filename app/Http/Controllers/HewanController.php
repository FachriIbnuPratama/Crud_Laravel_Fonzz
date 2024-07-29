<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Hewan;

class HewanController extends Controller
{
    public function index(){
        $hewans = Hewan::all();

        $data = [
            "hewans" => $hewans
        ];

        return view("Fonzz.index", $data);
    }

    public function destroy($id){
        $hewan = Hewan::where("id", $id)->first();
        $hewan->delete();

        return redirect("/hewan");
    }

    public function create(){
        return view('Fonzz.tambah');
    }

    public function store(Request $request){
        $nama = $request->nama;
        $jenis = $request->jenis;
        $keterangan = $request->keterangan;

        $dataHewan = new Hewan();
        $dataHewan->nama = $request->nama;
        $dataHewan->jenis = $request->jenis;
        $dataHewan->keterangan = $request->keterangan;
        $dataHewan->save();
        
        return redirect("/hewan");
    }

    public function edit($id){
        $hewan = Hewan::where("id", $id)->first();

        $data = [
            "hewan" => $hewan
        ];

        return view("fonzz.edit", $data);
    } 

    public function update(Request $request, $id){
        $nama = $request->nama;
        $jenis = $request->jenis;
        $keterangan = $request->keterangan;

        $editHewan = Hewan::where("id", $id)->first();
        $editHewan->nama = $request->nama;
        $editHewan->jenis = $request->jenis;
        $editHewan->keterangan = $request->keterangan;
        $editHewan->save();
        
        return redirect("/hewan");
    }
}
