<?php

use App\Http\Controllers\Backend\AdminLoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login', [
        "title" => "Login"
    ]);
});
Route::get('/home', function () {
    return view('backend/home-backend', [
        "title" => "Home Admin"
    ]);
});
Route::get('/mobil', function () {
    return view('backend/mobil-backend', [
        "title" => "Kendaraan Mobil"
    ]);
});
Route::get('/sewa', function () {
    return view('backend/sewa-backend', [
        "title" => "Data Sewa"
    ]);
});
Route::get('/user', function () {
    return view('backend/user-backend', [
        "title" => "Data User"
    ]);
});
Route::get('/add_mobil', function () {
    return view('backend/tambah-mobil', [
        "title" => "Kendaraan Mobil"
    ]);
});
Route::get('/edit_mobil', function () {
    return view('backend/edit-mobil', [
        "title" => "Kendaraan Mobil"
    ]);
});
Route::get('/edit_sewa', function () {
    return view('backend/edit-sewa', [
        "title" => "Data Sewa"
    ]);
});
Route::get('/edit_user', function () {
    return view('backend/edit-user', [
        "title" => "Data User"
    ]);
});

// Frontend
Route::get('/home-frontend', function () {
    return view('frontend/home-frontend', [
        "title" => "Home"
    ]);
});
Route::get('/katalog-frontend', function () {
    return view('frontend/katalog-mobil', [
        "title" => "Katalog Mobil"
    ]);
});
Route::get('/detail', function () {
    return view('frontend/detail-mobil', [
        "title" => "Katalog Mobil"
    ]);
});
Route::get('/pesan-sekarang', function () {
    return view('frontend/pesan-sekarang', [
        "title" => "Katalog Mobil"
    ]);
});
Route::get('/pesanan', function () {
    return view('frontend/pesanan', [
        "title" => "Rincian Pesanan"
    ]);
});
Route::get('/akun', function () {
    return view('frontend/akun', [
        "title" => "Akun"
    ]);
});
Route::get('/edit-akun', function () {
    return view('frontend/edit-akun', [
        "title" => "Akun"
    ]);
});
// Route::prefix("admin")->group(function () {
//     Route::get('/login', [AdminLoginController::class, 'index'])->name('admin.login');
// });

// Route::group(["/"], function () {
//     Route::get('/login', [AdminLoginController::class, 'index'])->name('admin.login');
// });

//Route::get('/login', [LoginController::class, 'index'])->name('login');
//Route::post('/login/action', [LoginController::class, 'doLogin'])->name("action-login");
