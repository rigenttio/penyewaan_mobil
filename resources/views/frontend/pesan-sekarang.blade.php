@extends('layouts.main-frontend')
@section('konten')
<div class="container">
    <div class="mx-auto mb-5" style="max-width: 45rem;">
        <div class="card">
            <div class="card-header bg-light text-black text-center">
                Pesan Mobil
            </div>
            <div class="card-body">
                <form action="/katalog/detail/{{ $id }}/pesan" method="POST">
                    @csrf
                    <div class="container overflow-hidden">
                        <div class="row gy-3 justify-content-center">
                            <input type="hidden" name="id" value="{{ $id }}">
                            <div class="col-6">
                                <div class="mb-3">
                                    <h6 class="card-subtitle mb-1">Merk</h6>
                                    <p class="card-text mb-4">{{$mobil->merk}}</p>
                                </div>
                                <div class="mb-3">
                                    <h6 class="card-subtitle mb-1">Harga Sewa/Hari</h6>
                                    <p class="card-text mb-4">{{ number_format($mobil->harga_sewa, 2, ',', '.') }}</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="tglsewa" class="form-label">Tgl. Sewa</label>
                                    <input type="text" class="form-control datepicker" id="tglsewa" name="tglsewa" placeholder="Tgl. Sewa">
                                </div>
                                <div class="mb-3">
                                    <label for="tglkembali" class="form-label">Tgl. Kembali</label>
                                     <input type="text" class="form-control datepicker" id="tglkembali" name="tglkembali" placeholder="Tgl. Kembali">
                                </div>
                            </div>
                        </div>
                    </div>       
                    <div class="col-12 ">
                        <a href="/katalog"><button type="button" class="btn btn-secondary">< Kembali</button></a>
                        <button type="submit" class="btn btn-primary">Pesan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $( function() {
        $( ".datepicker" ).datepicker({
       todayBtn: "linked",
       language: "id",
       autoclose: true,
       todayHighlight: true,
       dateFormat: 'dd/mm/yy' 
   });
    } );
</script>
@endsection