<?php

namespace App\Http\Controllers\backend;

use App\Models\Mobil;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pelanggan;
use App\Models\Sewa;

class AdminHomeController extends Controller
{
    public function index()
    {
        $mobils = Mobil::all();

        $countSewa = Sewa::get()->count();
        $countUser = Pelanggan::get()->count();


        return view('backend/home-backend', [
            "title" => "Home Admin",
            "jumlah_mobil" => $mobils->count(),
            "jumlah_tersedia" => $mobils->where("status", 0)->count(),
            "jumlah_sewa" => $countSewa,
            "jumlah_user" => $countUser
        ]);
    }
}
