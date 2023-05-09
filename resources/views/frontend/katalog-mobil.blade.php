@extends('layouts.main-frontend')
@section('konten')
<table class="table">
    <thead>
      <tr>
        <th scope="col">No.</th>
        <th scope="col">Merk</th>
        <th scope="col">Status</th>
        <th scope="col">Kapasitas</th>
        <th scope="col">Harga Sewa/Hari</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>@mdo</td>
        <td>Otto</td>
        <td>Otto</td>
        <td>Otto</td>
        <td width="150px" scope="row">
            <a href="/detail" class=" card-link mb-auto">Detail</a>
        </td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        <td>Otto</td>
        <td>Otto</td>

      </tr>
      <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
        <td>Otto</td>
        <td>Otto</td>
      </tr>
    </tbody>
  </table>
@endsection