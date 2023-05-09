@extends('layouts.main-frontend')
@section('konten')
<div class="container">
    <div class="mx-auto mb-5" style="max-width: 45rem;">
        <div class="card">
            <div class="card-header bg-light text-black text-center">
                Detail Kendaraan
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="mb-3">
                        <h6 class="card-subtitle mb-1">Merk</h6>
                        <p class="card-text mb-4">Toyota Supra</p>
                    </div>
                    <div class="mb-3">
                        <h6 class="card-subtitle mb-1">Model</h6>
                        <p class="card-text mb-4">Sport</p>
                    </div>
                    <div class="mb-3">
                        <h6 class="card-subtitle mb-1">Tahun</h6>
                        <p class="card-text mb-4">1999</p>
                    </div>
                    <div class="mb-3">
                        <h6 class="card-subtitle mb-1">Warna</h6>
                        <p class="card-text mb-4">putih</p>
                    </div>
                    <div class="mb-3">
                        <h6 class="card-subtitle mb-1">Kapasitas</h6>
                        <p class="card-text mb-4">2</p>
                    </div>
                    <div class="mb-3">
                        <h6 class="card-subtitle mb-1">Deskripsi</h6>
                        <p class="card-text mb-4">sfsfesfs</p>
                    </div>
                    <div class="mb-3">
                        <h6 class="card-subtitle mb-1">Status</h6>
                        <p class="card-text mb-4">Tersedia</p>
                    </div>
                    <div class="mb-3">
                        <h6 class="card-subtitle mb-1">Harga Sewa/Hari</h6>
                        <p class="card-text mb-4">Rp. 450.000</p>
                    </div>
                    <div class="col-12 ">
                        <a href="/katalog-frontend"><button type="button" class="btn btn-secondary">< Kembali</button></a>
                        <a href="/pesan-sekarang"><button type="button" class="btn btn-primary">Pesan Sekarang</button></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection