@extends('layouts.main-backend')
@section('konten')
<table class="table">
    <thead>
      <tr>
        <th scope="col">No.</th>
        <th scope="col">ID Sewa</th>
        <th scope="col">Penyewa</th>
        <th scope="col">Mobil</th>
        <th scope="col">Tgl. Sewa</th>
        <th scope="col">Tgl. Kembali</th>
        <th scope="col">Total Harga</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @php
          $i = 1;
      @endphp
      @foreach ($sewa as $s)
      <tr>
        <th scope="row">{{$i}}</th>
        <td>{{$s->id}}</td>
        <td>{{$s->pelanggan->nama}}</td>
        <td>{{$s->mobil->merk}}</td>
        <td>{{$s->tgl_sewa}}</td>
        <td>{{$s->tgl_kembali}}</td>
        <td>Rp. {{ number_format($s->biaya_sewa, 2, ',', '.') }}</td>
        <td width="150px" scope="row">
            <a href="/edit_sewa/{{$s->id}}"><button type="button" class="btn btn-success">Edit</button></a>
            <a href="" onclick="return confirm('Data akan di hapus permanent')"><button type="button" class="btn btn-danger">Delete</button></a>
        </td>
      </tr>
      @php
          $i++;
      @endphp
      @endforeach
    </tbody>
  </table>
@endsection