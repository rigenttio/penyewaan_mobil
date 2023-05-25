@extends('layouts.main-backend')
@section('konten')
<div class="container">
    <div class="mx-auto">
        <div class="card">
            <div class="card-header bg-light text-black">
                Tambah Mobil
            </div>
            <div class="card-body">
                <form action="/add_mobil" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="merk" class="form-label">Merk</label>
                        <input type="text" class="form-control" id="merk" name="merk" placeholder="Masukan Merk Mobil">
                    </div>
                    <div class="mb-3">
                        <label for="model" class="form-label">Model</label>
                        <input type="text" class="form-control" id="model" name="model" placeholder="Masukan Model Mobil">
                    </div>
                    <div class="mb-3">
                        <label for="tahun" class="form-label">Tahun</label>
                        <input type="number" class="form-control" id="tahun" name="tahun" placeholder="Masukan Tahun Mobil">
                    </div>
                    <div class="mb-3">
                        <label for="warna" class="form-label">Warna</label>
                        <input type="text" class="form-control" id="warna" name="warna" placeholder="Masukan Warna Mobil">
                    </div>
                    <div class="mb-3">
                        <label for="kapasitas" class="form-label">Kapasitas</label>
                        <input type="number" min="0" class="form-control" id="kapasitas" name="kapasitas" placeholder="Kapasitas Mobil">
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Keterangan">
                    </div>
                    <div class="mb-3">
                        <label for="hargasewa" class="form-label">Harga Sewa / Hari</label>
                        <input type="number" min="0" class="form-control" id="hargasewa" name="harga_sewa" placeholder="Harga Sewa">
                    </div>
                    <div class="col-12 ">
                        <input type="submit" name="submit" value="Submit" class="me-5 btn btn-primary" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection