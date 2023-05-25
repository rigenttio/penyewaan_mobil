<?php

namespace App\Http\Controllers\frontend;

use App\Models\Mobil;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend/home-frontend', [
            "title" => "Home",
            "katalog" => Mobil::where('status', 0)->get()
        ]);
    }
}
