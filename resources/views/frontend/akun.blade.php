@extends('layouts.main-frontend')
@section('konten')
<div class="container">
    <div class="mx-auto mb-5" style="max-width: 30rem;">
        <div class="card">
            <div class="card-header bg-light text-black text-center">
                Akun Profil
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="container overflow-hidden">
                        <div class="row gy-3 justify-content-center">
                            <div class="col-6">
                                <div class="mb-3">
                                    <h6 class="card-subtitle mb-1">Nama</h6>
                                    <p class="card-text mb-4">{{$user->nama}}</p>
                                </div>
                                <div class="mb-3">
                                    <h6 class="card-subtitle mb-1">Alamat</h6>
                                    <p class="card-text mb-4">{{$user->alamat}}</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <h6 class="card-subtitle mb-1">No. Telp</h6>
                                    <p class="card-text mb-4">{{$user->no_tlp}}</p>
                                </div>
                                <div class="mb-3">
                                    <h6 class="card-subtitle mb-1">Email</h6>
                                    <p class="card-text mb-4">{{$user->email}}</p>
                                </div>
                            </div>
                            <div class="col-12 ">
                                <a href="/edit-akun/{{$user->id}}"><button type="button" class="btn btn-danger">Edit</button></a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection