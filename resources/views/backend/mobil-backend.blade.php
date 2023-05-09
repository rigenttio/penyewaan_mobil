@extends('layouts.main-backend')
@section('konten')
<div class="container-fluid mb-4">
    <a href="/add_mobil"><button type="button" class="btn btn-primary ">Tambah</button></a>
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
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>Otto</td>
        <td>Otto</td>
        <td>Otto</td>
        <td>Otto</td>
        <td width="150px" scope="row">
            <a href="/edit_mobil"><button type="button" class="btn btn-success">Edit</button></a>
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
        <td>Otto</td>
      </tr>
    </tbody>
  </table>
@endsection