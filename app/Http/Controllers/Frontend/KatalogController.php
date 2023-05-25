<?php

namespace App\Http\Controllers\frontend;

use DateTime;
use App\Models\Sewa;
use App\Models\Mobil;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class KatalogController extends Controller
{
    public function index()
    {
        return view('frontend/katalog-mobil', [
            "title" => "Katalog Mobil",
            "katalog" => Mobil::where('status', 0)->get()
        ]);
    }

    public function detail(Request $request)
    {
        $mobil = Mobil::where("id", $request->id)->first();

        return view('frontend/detail-mobil', [
            "title" => "Katalog Mobil",
            "mobil" => $mobil
        ]);
    }

    public function pesan(Request $request)
    {
        $mobil = Mobil::where("id", $request->id)->first();
        if (!$mobil)
            return redirect('/home-frontend');

        return view('frontend/pesan-sekarang', [
            "title" => "Rincian Pesanan",
            "id" => $request->id,
            "mobil" => $mobil,
        ]);
    }

    public function store(Request $request)
    {
        //$request->tglsewa = DateTime::createFromFormat('d/m/Y', $request->tglsewa)->format('Y-m-d');
        //$request->tglkembali = DateTime::createFromFormat('d/m/Y', $request->tglkembali)->format('Y-m-d');

        $mobil = Mobil::where('id', $request->id)->get()->first();
        if (!$mobil)
            return redirect('/home');

        $hari = intval(date_diff(
            date_create(DateTime::createFromFormat('d/m/Y', $request->tglsewa)->format('Y-m-d')),
            date_create(DateTime::createFromFormat('d/m/Y', $request->tglkembali)->format('Y-m-d'))
        )->format('%d'));

        $total_harga_sewa = $mobil->harga_sewa * $hari;


        $sewa = Sewa::create([
            'mobil_id' => $request->id,
            'pelanggan_id' => Auth::user()->id,
            'tgl_sewa' => $request->tglsewa,
            'tgl_kembali' => $request->tglkembali,
            'biaya_sewa' => $total_harga_sewa,
        ]);

        if ($sewa) {
            Mobil::where('id', $request->id)->update([
                'status' => 1
            ]);
        }
        return redirect('/pesanan')->with('success', 'Data Mobil Berhasil ditambah');
    }
}
