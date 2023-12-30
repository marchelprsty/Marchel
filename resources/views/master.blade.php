<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Digital Guestbook</title>

    <style>
        body {
            background-image: url('/image/bgimage.jpg'); /* Sesuaikan dengan path dan nama gambar Anda */
            background-size: cover; /* Untuk memastikan gambar mencakup seluruh background */
            backdrop-filter: blur(5px);
        }
    </style>

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
            <div class="card-body">
                <div class="">
                <h1 class="text-center font-weight-bold">My Digital Guestbook</h1>
                </div>
                <hr>
                <a href="/home"><button class="btn btn-primary">Create</button></a> 
                <a href="/read"><button class="btn btn-primary">Read</button></a> 
                <hr>
        @yield('content')
        <form action="{{ url('logout') }}" method="POST">
            @csrf
            <button type="submit"> Logout </button>
        </form>
            </div>
        </div>
        <footer>
            <p class="text-center">&copy; <a href=#>MarchelPrasetyo</a>. 2024</p>
        </footer>
    </div>

</body>
</html>