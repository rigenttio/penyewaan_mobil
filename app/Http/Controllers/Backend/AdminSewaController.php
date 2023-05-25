<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Sewa;
use Illuminate\Http\Request;

class AdminSewaController extends Controller
{
    public function index()
    {
        return view('backend/sewa-backend', [
            "title" => "Data Sewa",
            "sewa" => Sewa::all()
        ]);
    }

    public function edit_sewa(Request $request)
    {
        return view('backend/edit-sewa', [
            "title" => "Data Sewa",
            'sewa' => Sewa::where('id', $request->id)->get()->first()
        ]);
    }
}
