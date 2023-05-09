@extends('layouts.main-backend')
@section('konten')
<div class="container">
    <div class="mx-auto">
        <div class="card">
            <div class="card-header bg-light text-black">
                Edit Data User
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama User">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat User">
                    </div>
                    <div class="mb-3">
                        <label for="notlp" class="form-label">No. Telp</label>
                        <input type="number" class="form-control" id="notlp" name="notlp" placeholder="Masukan Nomor Telepon">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Masukan Email User">
                    </div>
                    <div class="col-12 ">
                        <input type="submit" name="submit" value="Perbarui" class="me-5 btn btn-primary" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection