@extends('layouts.main-backend')
@section('konten')
<div class="container">
    <div class="mx-auto">
        <div class="card">
            <div class="card-header bg-light text-black">
                Edit Data Sewa
            </div>
            <div class="card-body">
                <form action="/edit_sewa/{{$sewa->id}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="penyewa" class="form-label">Penyewa</label>
                        <input type="text" class="form-control" id="penyewa" name="pelanggan_id" value="{{$sewa->pelanggan->nama}}" placeholder="Penyewa">
                    </div>
                    {{-- <div class="mb-3">
                        <label for="mobil" class="form-label">Mobil</label>
                            <select name="mobil_id" class="form-select" aria-label="Default select example">
                                <option>- Pilih Merk Mobil -</option>
                                @foreach ($sewa as $s)
                                    <option value="{{$s->id}}">{{$sewa->mobil()->first()->merk}}</option>
                                @endforeach
                            </select>
                    </div> --}}
                    {{-- <div class="mb-3"> --}}
                        {{-- <label for="tglsewa" class="form-label">Tgl. Sewa</label>
                        <input type="number" class="form-control" id="tglsewa" name="tglsewa" placeholder="Tanggal Sewa">
                    </div>
                    <div class="mb-3">
                        <label for="tglkembali" class="form-label">Tgl. Kembali</label>
                        <input type="text" class="form-control" id="tglkembali" name="tglkembali" placeholder="Tanggal Kembali">
                    </div>
                    <div class="mb-3">
                        <label for="total" class="form-label">Total Harga</label>
                        <input type="number" min="0" class="form-control" id="total" name="total" placeholder="Total Harga">
                    </div> --}}
                    <div class="col-12 ">
                        <input type="submit" name="submit" value="Perbarui" class="me-5 btn btn-primary" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection