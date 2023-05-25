<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index()
    {
        return view('backend/user-backend', [
            "title" => "Data User",
            "pelanggan" => Pelanggan::all()
        ]);
    }
}
