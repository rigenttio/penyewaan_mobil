@extends('layouts.main-frontend')
@section('konten')
<div class="container">
    <div class="mx-auto mb-5" style="max-width: 45rem;">
        <div class="card">
            <div class="card-header bg-light text-black text-center">
                Pesan Mobil
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="container overflow-hidden">
                        <div class="row gy-3 justify-content-center">
                            <div class="col-6">
                                <div class="mb-3">
                                    <h6 class="card-subtitle mb-1">Merk</h6>
                                    <p class="card-text mb-4">Toyota Supra</p>
                                </div>
                                <div class="mb-3">
                                    <h6 class="card-subtitle mb-1">Harga Sewa/Hari</h6>
                                    <p class="card-text mb-4">Rp. 450.000</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="tglsewa" class="form-label">Tgl. Sewa</label>
                                    <input type="text" class="form-control" id="tglsewa" name="tglsewa" placeholder="Tgl. Sewa">
                                </div>
                                <div class="mb-3">
                                    <label for="tglkembali" class="form-label">Tgl. Kembali</label>
                                     <input type="text" class="form-control" id="tglkembali" name="tglkembali" placeholder="Tgl. Kembali">
                                </div>
                            </div>
                        </div>
                    </div>       
                    <div class="col-12 ">
                        <a href="/katalog-frontend"><button type="button" class="btn btn-secondary">< Kembali</button></a>
                        <a href="/pesan-sekarang"><button type="button" class="btn btn-primary">Pesan</button></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection