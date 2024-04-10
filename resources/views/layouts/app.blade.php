<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Mój dokument</title>

    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.3-dist/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>
    <h1>@yield('title')</h1>
    <nav>
        <a href="{{ route("home.welcome") }}">Home</a>
        <a href="{{ route("todoapp.welcome") }}">To do app</a>
        <a href="{{ route("blog.welcome") }}">Blog</a>
        <a href="{{ route("contact.welcome") }}">Kontakt</a>
        </nav>
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="container">
        @yield('content')
    </div>

    <footer>
        <a href="{{ route("home.welcome") }}">Home</a>
        <a href="{{ route("todoapp.welcome") }}">To do app</a>
        <a href="{{ route("blog.welcome") }}">Blog</a>
        <a href="{{ route("contact.welcome") }}">Kontakt</a>
    </footer>

    <script src="/bootstrap-5.3.3-dist/js/bootstrap.js"></script>
</body>
</html>