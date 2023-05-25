@extends('layouts.main-backend')
@section('konten')
<div class="container overflow-hidden text-center">
<div class="row gy-3 justify-content-center">
    <div class="col-3">
        <div class="card bg-primary" style="width: 18rem;">
            <div class="card-body text-center">
              <h5 class="card-title text-white"> {{ $jumlah_mobil }}</h5>
              <h6 class="card-subtitle mb-2 text-white">Jumlah Mobil</h6>
            </div>
          </div>
    </div>
    <div class="col-3">
        <div class="card bg-success" style="width: 18rem;">
            <div class="card-body text-center">
              <h5 class="card-title text-white">{{ $jumlah_tersedia }}</h5>
              <h6 class="card-subtitle mb-2 text-white">Ketersediaan Mobil</h6>
            </div>
          </div>
    </div>
    <div class="col-3">
        <div class="card bg-danger" style="width: 18rem;">
            <div class="card-body text-center">
              <h5 class="card-title text-white">{{$jumlah_sewa }}</h5>
              <h6 class="card-subtitle mb-2 text-white">Total Sewa</h6>
            </div>
          </div>
    </div>
    <div class="col-3">
        <div class="card bg-info" style="width: 18rem;">
            <div class="card-body text-center">
              <h5 class="card-title text-white">{{$jumlah_user}}</h5>
              <h6 class="card-subtitle mb-2 text-white">User</h6>
            </div>
          </div>
    </div>
</div>
</div>

@endsection