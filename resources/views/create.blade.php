@extends('master')
@section('content')

<div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">

                <h2 class="text-center">Haloo..</h2>
                <p class="text-center">Tolong Masukan data diri anda</p>

    <form method="POST" action="{{ url('/store') }}">

    {{ csrf_field() }}
    <label for="nama">Name</label>
    <input type="text" name="nama" id="name" class ="form-control"> </br>
                            @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif


    <label for="email">Email</label>
    <input type="email" name="email" id="email" class ="form-control"> </br>
                            @if($errors->has('email'))
                                <div class="text-danger">
                                    {{ $errors->first('email')}}
                                </div>
                            @endif

    <label for="Alamat">Alamat</label>
    <input type="alamat" name="alamat" id="alamat" class ="form-control"> </br>
                            @if($errors->has('alamat'))
                                <div class="text-danger">
                                    {{ $errors->first('alamat')}}
                                </div>
                            @endif

    <label for="no_telepon">No Telepon</label>
    <input type="no_telepon" name="no_telepon" id="no_telepon" class ="form-control"> </br>
                            @if($errors->has('no_telepon'))
                                <div class="text-danger">
                                    {{ $errors->first('no_telepon')}}
                                </div>
                            @endif

                        @if (session('success'))
                            <div class="alert alert-success">session('success')</div>
                        @endif

    <div class="row d-flex justify-content-center align-items-center h-100">
    <input type="submit" value="Save" class="btn btn-success">
    </div>
</form>
</div>
</div>
</div>
@stop