@extends('layouts.main-backend')
@section('konten')
<table class="table">
    <thead>
      <tr>
        <th scope="col">No.</th>
        <th scope="col">ID User</th>
        <th scope="col">Nama</th>
        <th scope="col">Alamat</th>
        <th scope="col">No. Telp</th>
        <th scope="col">Email</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($pelanggan as $p) 
      <tr>
        <th scope="row">1</th>
        <td>{{$p->id}}</td>
        <td>{{$p->nama}}</td>
        <td>{{$p->alamat}}</td>
        <td>{{$p->no_tlp}}</td>
        <td>{{$p->email}}</td>
        <td width="150px" scope="row">
            <a href="/edit_user"><button type="button" class="btn btn-success">Edit</button></a>
            <a href="" onclick="return confirm('Data akan di hapus permanent')"><button type="button" class="btn btn-danger">Delete</button></a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection