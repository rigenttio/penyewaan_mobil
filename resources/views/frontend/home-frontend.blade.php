@extends('layouts.main-frontend')
@section('konten')
<div class="container overflow-hidden">
<div class="row gy-3 justify-content-center">
    @foreach ($katalog as $k)
    <div class="col-3">
        <div class="card bg-danger" style="min-width: 18rem; min-height: 12rem;">
            <div class="card-body">
              <h5 class="card-title text-white">{{$k->merk}}</h5>
              <h6 class="card-subtitle mb-2 text-white">{{$k->kapasitas}}</h6>
              <p class="card-text text-white mb-5">Rp. {{number_format($k->harga_sewa, 2, ',', '.')}}/Hari</p>
              <a href="/detail" class="text-white card-link mb-auto">Detail</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
</div>

@endsection