<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Заполнение участников</title>

    <link rel="stylesheet" href="{{ asset("css/bootstrap/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("css/main.css") }}">
</head>
<body>

    @include('includes.navbar')

    <div class="container">

        @yield('content')

    </div>

<script src="{{ asset("js/bootstrap/bootstrap.bundle.js") }}"></script>
<script src="{{ asset("js/font-awesome.js") }}"></script>

</body>
</html>
