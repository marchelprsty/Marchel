@extends('master')
@section('content')

<table class="table table-condensed">
    <thead class="">
    <tr>
        <th>Nama</th>
        <th>Email</th>
        <th>Alamat</th>
        <th>Opsi</th>
    </tr>
</thead>
<tbody>
        <tr>
            <th class="">{{$data->nama}}</th>
            <td>{{$data->email}}</td>
            <td>{{$data->alamat}}</td>
            <td>
                <a class="btn btn-warning btn-sm text-white" href="/update">Update</a>
                <a class="btn btn-danger btn-sm" href="/delete">Hapus</a>
            </td>
        </tr>
</tbody>
</table>
</div>
<div class="my-6">
<a href="/input" class="py-2 px-4 rounded bg-green-700 shadow-md text-white hover:bg-green-900 focus:outline-none">Kembali</a>
</div>
@endsection