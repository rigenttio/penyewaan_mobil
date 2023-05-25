@extends('layouts.main-backend')
@section('konten')
<div>
    <a href="{{ route('add.mobil') }}"><button type="button" class="btn btn-primary ">Tambah</button></a>
    @if (session()->has('success'))        
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Berhasil!</strong> {{session('success')}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">No.</th>
        <th scope="col">Merk</th>
        <th scope="col">Model</th>
        <th scope="col">Tahun</th>
        <th scope="col">Warna</th>
        <th scope="col">Kapasitas</th>
        <th scope="col">Deskripsi</th>
        <th scope="col">Harga Sewa/Hari</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @php
          $i = 1;
      @endphp
      @foreach ($mobil as $m)
      <tr>
        <th scope="row">{{$i}}</th>
        <td>{{ $m->merk }}</td>
        <td>{{ $m->model }}</td>
        <td>{{ $m->tahun }}</td>
        <td>{{ $m->warna }}</td>
        <td>{{ $m->kapasitas }}</td>
        <td>{{ $m->deskripsi }}</td>
        <td>{{ $m->harga_sewa }}</td>
        <td width="150px" scope="row">
            <a href="/edit_mobil/{{$m->id}}" type="button" class="btn btn-success">Edit</button></a>
            <form action="/mobil/{{$m->id}}" method="POST" class="d-inline">
              @csrf
              @method('DELETE')
              <button onclick="return confirm('Hapus data secara permanent?')" class="btn btn-danger">Delete</button>
            </form>
        </td>
      </tr>
      @php
          $i++;
      @endphp
      @endforeach
    </tbody>
</table>



@endsection

