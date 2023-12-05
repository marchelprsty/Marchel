<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-body vh-100">
                <div class="">
                <h1 class="text-center font-weight-bolder ">selamatdatang</h1>
                </div>
                <hr>
                <a href="/create"><button class="btn btn-primary">Create</button></a> 
                <a href="/read"><button class="btn btn-success">Read</button></a> 
                <hr>
                <form action="#" method="get" class="form-inline mb-3">
                    <input class="form-control-sm inline" type="text" name="cari" placeholder="Cari....">
					<input class="btn btn-primary ml-3" type="submit" value="CARI">
                </form>
        @yield('content')
            </div>
        </div>
    </div>
</body>
</html>