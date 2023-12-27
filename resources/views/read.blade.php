@extends('master')
@section('content')
<h2 class="text-center">Haloo..</h2>
<p class="text-center">Ini daftar tamu kita ❤️❤️</p>

<form method="GET" action="{{ route('search') }}">
    <input type="text" class="form-control-md inline" name="cari" placeholder="Search...">
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
    @foreach ($guestbooks as $guest)
    <tr>
        <th class="">{{$guest->nama}}</th>
        <td>{{$guest->email}}</td>
        <td>{{$guest->alamat}}</td>
        <td>{{$guest->no_telepon}}</td>
        <td>
            <a href="{{ url('/edit/'.$guest->id) }}"><button class="btn btn-warning">Edit</button></a>
                    |
            <a href="{{ url('/destroy/'.$guest->id) }}"><button class="btn btn-danger">Delete</button></a>
        </td>
    </tr>
    @endforeach



</tbody>
</table>
<div class="text-center">
{{ $guestbooks->links() }}
</div>
@endsection