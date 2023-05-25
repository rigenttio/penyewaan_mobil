@extends('layouts.main-frontend')
@section('konten')
<div class="container">
    <div class="mx-auto mb-5" style="max-width: 30rem;">
        <div class="card">
            <div class="card-header bg-light text-black text-center">
                Rincian Pesanan
            </div>
            <div class="card-body">
                    <div class="container overflow-hidden">
                        <div class="row gy-3 justify-content-center">
                            <div class="col-6">
                                <div class="mb-3">
                                    <h6 class="card-subtitle mb-1">Merk</h6>
                                    <p class="card-text mb-4">{{$pesanan->mobil()->first()->merk}}</p>
                                </div>
                                <div class="mb-3">
                                    <h6 class="card-subtitle mb-1">Penyewa</h6>
                                    <p class="card-text mb-4">{{$pesanan->pelanggan()->first()->nama}}</p>
                                </div>
                                <div class="mb-3">
                                    <h6 class="card-subtitle mb-1">No. Telp</h6>
                                    <p class="card-text mb-4">{{$pesanan->pelanggan()->first()->no_tlp}}</p>
                                </div>
                                <div class="mb-3">
                                    <h6 class="card-subtitle mb-1">Warna</h6>
                                    <p class="card-text mb-4">{{$pesanan->mobil()->first()->warna}}</p>
                                </div>
                                <div class="mb-3">
                                    <h6 class="card-subtitle mb-1">Alamat</h6>
                                    <p class="card-text mb-4">{{$pesanan->pelanggan()->first()->alamat}}</p>
                                </div>
                                <div class="mb-3">
                                    <h6 class="card-subtitle mb-1">Email</h6>
                                    <p class="card-text mb-4">{{$pesanan->pelanggan()->first()->email}}</p>
                                </div>
                                <div class="mb-3">
                                    <h6 class="card-subtitle mb-1">Harga Sewa/Hari</h6>
                                    <p class="card-text mb-4">Rp. {{ number_format($pesanan->mobil()->first()->harga_sewa, 2, ',', '.') }}</p>
                                </div>                              
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <h6 class="card-subtitle mb-1">Tgl. Sewa</h6>
                                    <p class="card-text mb-4">{{date('d-m-Y', strtotime($pesanan->tgl_sewa))}}</p>
                                </div>
                                <div class="mb-3">
                                    <h6 class="card-subtitle mb-1">Tgl. Kembali</h6>
                                    <p class="card-text mb-4">{{date('d-m-Y', strtotime($pesanan->tgl_kembali))}}</p>
                                </div>
                                <div class="mb-3">
                                    <h6 class="card-subtitle mt-5 mb-1">Total Harga</h6>
                                    <p class="card-text mb-4">Rp. {{ number_format($pesanan->biaya_sewa, 2, ',', '.') }}</p>
                                </div>
                            </div>
                            <div class="col-12 ">
                                <a href="/home-frontend"><button type="button" class="btn btn-success">Home</button></a>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection