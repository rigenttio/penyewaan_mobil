<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AkunController extends Controller
{
    public function index()
    {
        $pelanggan = Auth::user();
        return view('frontend/akun', [
            "title" => "Akun",
            "user" => $pelanggan,
        ]);
    }

    public function edit_akun()
    {
        $pelanggan = Auth::user();
        return view('frontend.edit-akun', [
            "title" => "Edit Akun",
            "user" => $pelanggan,
        ]);
    }

    public function update(Request $request)
    {
        Pelanggan::where('id', $request->id)->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_tlp' => $request->no_tlp,
            'email' => $request->email,


        ]);
        return redirect('/akun');
    }
}
