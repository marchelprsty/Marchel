@extends('master')
@section('content')
<h2 class="text-center">Haloo..</h2>
<p class="text-center">Ini daftar tamu kita ❤️❤️</p>
<form action="/read/cari" method="GET" class="form-inline mb-3">
    <input class="form-control-md inline" type="text" name="cari" placeholder="Cari....">
    <input class="btn btn-primary ml-3" type="submit" value="cari">
</form>



<table class="table table-condensed">
    <thead class="">
    <tr>
        <th>Nama</th>
        <th>Email</th>
        <th>Alamat</th>
        <th>No Telepon</th>
        <th style="width: 200px;">Opsi</th>
    </tr>
</thead>
<tbody>
    @foreach ($guests as $guest)
    <tr>
        <th class="">{{$guest->nama}}</th>
        <td>{{$guest->email}}</td>
        <td>{{$guest->alamat}}</td>
        <td>{{$guest->no_telepon}}</td>
        <td>
            <a class="btn btn-warning btn-sm text-white" href="/update">Update</a>
            <a class="btn btn-danger btn-sm" href="/delete">Hapus</a>
        </td>
    </tr>
    @endforeach



</tbody>
</table>
<div class="text-center">
{{ $guests->links() }}
</div>
@endsection