<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\frontend\AkunController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\KatalogController;
use App\Http\Controllers\frontend\PesananController;
use App\Http\Controllers\backend\AdminHomeController;
use App\Http\Controllers\backend\AdminSewaController;
use App\Http\Controllers\backend\AdminUserController;
use App\Http\Controllers\backend\AdminMobilController;

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

Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::middleware(['auth', 'cekrole:1'])->group(function () {
    Route::get('/home', [AdminHomeController::class, 'index']);
    Route::get('/mobil', [AdminMobilController::class, 'index']);
    Route::delete('/mobil/{id}', [AdminMobilController::class, 'destroy']);
    Route::get('/edit_mobil/{id}', [AdminMobilController::class, 'edit_mobil']);
    Route::post('/edit_mobil/{id}', [AdminMobilController::class, 'update']);
    Route::get('/add_mobil', [AdminMobilController::class, 'add_mobil']);
    Route::post('/add_mobil', [AdminMobilController::class, 'store'])->name('add.mobil');
    Route::get('/sewa', [AdminSewaController::class, 'index']);
    Route::get('/edit_sewa/{id}', [AdminSewaController::class, 'edit_sewa']);
    Route::get('/user', [AdminUserController::class, 'index']);
});

Route::middleware(['auth', 'cekrole:0'])->group(function () {
    Route::get('/home-frontend', [HomeController::class, 'index']);
    Route::get('/pesanan', [PesananController::class, 'index']);
    Route::get('/akun', [AkunController::class, 'index']);
    Route::get('/katalog', [KatalogController::class, 'index']);
    Route::get('/katalog/detail/{id}', [KatalogController::class, 'detail']);
    Route::get('/katalog/detail/{id}/pesan', [KatalogController::class, 'pesan']);
    Route::post('/katalog/detail/{id}/pesan', [KatalogController::class, 'store']);
});




Route::get('/edit_user', function () {
    return view('backend/edit-user', [
        "title" => "Data User"
    ]);
});

// Frontend



Route::get('/pesan-sekarang', function () {
    return view('frontend/pesan-sekarang', [
        "title" => "Katalog Mobil"
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
