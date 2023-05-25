@extends('layouts.main-frontend')
@section('konten')
<div class="container">
    <div class="mx-auto mb-5" style="max-width: 45rem;">
        <div class="card">
            <div class="card-header bg-light text-black text-center">
                Detail Kendaraan
            </div>
            <div class="card-body">
                    <div class="mb-3">
                        <h6 class="card-subtitle mb-1">Merk</h6>
                        <p class="card-text mb-4">{{$mobil->merk}}</p>
                    </div>
                    <div class="mb-3">
                        <h6 class="card-subtitle mb-1">Model</h6>
                        <p class="card-text mb-4">{{$mobil->model}}</p>
                    </div>
                    <div class="mb-3">
                        <h6 class="card-subtitle mb-1">Tahun</h6>
                        <p class="card-text mb-4">{{$mobil->tahun}}</p>
                    </div>
                    <div class="mb-3">
                        <h6 class="card-subtitle mb-1">Warna</h6>
                        <p class="card-text mb-4">{{$mobil->warna}}</p>
                    </div>
                    <div class="mb-3">
                        <h6 class="card-subtitle mb-1">Kapasitas</h6>
                        <p class="card-text mb-4">{{$mobil->kapasitas}}</p>
                    </div>
                    <div class="mb-3">
                        <h6 class="card-subtitle mb-1">Deskripsi</h6>
                        <p class="card-text mb-4">{{$mobil->deskripsi}}</p>
                    </div>
                    <div class="mb-3">
                        <h6 class="card-subtitle mb-1">Harga Sewa/Hari</h6>
                        <p class="card-text mb-4">Rp. {{ number_format($mobil->harga_sewa, 2, ',', '.') }}</p>
                    </div>
                    <div class="col-12 ">
                        <a href="/katalog" class="btn btn-danger">< Kembali</a>
                        <a href="/katalog/detail/{{ $mobil->id }}/pesan" class="btn btn-success">Pesan Sekarang</a>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection