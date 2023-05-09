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
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>Otto</td>
        <td>Otto</td>
        <td width="150px" scope="row">
            <a href="/edit_user"><button type="button" class="btn btn-success">Edit</button></a>
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
      </tr>
      <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
        <td>Otto</td>
        <td>Otto</td>
        <td>Otto</td>
      </tr>
    </tbody>
  </table>
@endsection