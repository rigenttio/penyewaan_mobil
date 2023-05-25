@extends('layouts.main-frontend')
@section('konten')
<table class="table">
    <thead>
      <tr>
        <th scope="col">No.</th>
        <th scope="col">Merk</th>
        <th scope="col">Kapasitas</th>
        <th scope="col">Harga Sewa/Hari</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @php
          $i = 1;
      @endphp
      @foreach ($katalog as $k)
      <tr>
        <th scope="row">{{$i}}</th>
        <td>{{$k->merk}}</td>
        <td>{{$k->kapasitas}} Orang</td>
        <td>Rp {{ number_format($k->harga_sewa, 2, ',', '.') }}
        </td>
        <td width="150px" scope="row">
            <a href="/katalog/detail/{{$k->id}}" class=" card-link mb-auto">Detail</a>
        </td>
      </tr>
      @php
          $i++;
      @endphp
      @endforeach
    </tbody>
  </table>
@endsection