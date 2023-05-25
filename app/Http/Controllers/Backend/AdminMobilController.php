<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Mobil;
use Illuminate\Http\Request;

class AdminMobilController extends Controller
{
    public function index()
    {
        return view('backend.mobil-backend', [
            "title" => "Kendaraan Mobil",
            "mobil" => Mobil::all()
        ]);
    }

    public function add_mobil()
    {
        return view('backend.tambah-mobil', [
            "title" => "Kendaraan Mobil",

        ]);
    }

    public function store(Request $request)
    {

        // $request->validate([
        //     'merk' => 'required',
        //     'model' => 'required',
        //     'tahun' => 'required',
        //     'warna' => 'required',
        //     'kapasitas' => 'required',
        //     'deskripsi' => 'required',
        //     'harga_sewa' => 'required',
        // ]);

        Mobil::create($request->all());
        return redirect('/mobil')->with('success', 'Data Mobil Berhasil ditambah');
    }

    public function destroy($id)
    {
        Mobil::destroy($id);
        return redirect('/mobil');
    }

    public function edit_mobil(Request $request)
    {
        return view('backend/edit-mobil', [
            "title" => "Kendaraan Mobil",
            "mobil" => Mobil::where('id', $request->id)->get()->first(),
        ]);
    }

    public function update(Request $request)
    {
        Mobil::where('id', $request->id)->update([
            'merk' => $request->merk,
            'model' => $request->model,
            'tahun' => $request->tahun,
            'warna' => $request->warna,
            'kapasitas' => $request->kapasitas,
            'deskripsi' => $request->deskripsi,
            'harga_sewa' => $request->harga_sewa,
        ]);
        return redirect('/mobil');
    }
}
