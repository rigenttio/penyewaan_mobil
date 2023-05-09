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
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>Otto</td>
        <td>Otto</td>
        <td>Otto</td>
        <td width="150px" scope="row">
            <a href="/edit_sewa"><button type="button" class="btn btn-success">Edit</button></a>
            <a href="" onclick="return confirm('Data akan di hapus permanent')"><button type="button" class="btn btn-danger">Delete</button></a>
        </td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        <td>Otto</td>
        <td>Otto</td>
        <td>Otto</td>
        <td>Otto</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
        <td>Otto</td>
        <td>Otto</td>
        <td>Otto</td>
        <td>Otto</td>
      </tr>
    </tbody>
  </table>
@endsection