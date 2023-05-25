<?php

namespace App\Http\Controllers\frontend;

use App\Models\Sewa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pelanggan;
use Illuminate\Support\Facades\Auth;

class PesananController extends Controller
{
    public function index()
    {
        $sewa = Sewa::where('sewas.pelanggan_id', Auth::user()->id)->with(['pelanggan', 'mobil'])->get()->first();
        // $sewa = Sewa::with(['pelanggan', 'mobil'])->get()->first();
        //dd($sewa);


        // $sewa = Sewa::leftJoin('pelanggans', 'pelanggans.id', '=', 'sewas.pelanggan_id')
        //     ->leftJoin('mobils', 'mobils.id', '=', 'sewas.mobil_id')
        //     ->where('sewas.pelanggan_id', Auth::user()->id)->get()->first();


        return view('frontend/pesanan', [
            "title" => "Rincian Pesanan",
            "pesanan" => $sewa
        ]);
    }
}
