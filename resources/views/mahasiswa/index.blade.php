@vite(['resources/sass/app.scss', 'resources/js/app.js'])


<table class="table table-bordered">
    <thead class="">
    <tr>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Tanggal Lahir</th>
        <th style="width: 200px;">Opsi</th>
    </tr>
</thead>
<tbody>
    @foreach ($mahasiswas as $item)
    <tr>
        <th class="">{{$item->nama}}</th>
        <td>{{$item->alamat}}</td>
        <td>{{$item->tanggal_lahir}}</td>
       
        <td>
            <a href="/pegawai/tambah" class="btn btn-warning btn-sm text-white" href="/update">Update</a>
            <a class="btn btn-danger btn-sm" href="/delete">Hapus</a>
        </td>
    </tr>
    @endforeach



</tbody>
</table>