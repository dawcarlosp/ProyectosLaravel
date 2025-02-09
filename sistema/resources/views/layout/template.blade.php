<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg" href="{{asset('favicon.svg')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>@yield('title')</title>
</head>

<body class="bg-dark text-light">
    <main>
        <div class="container py-4 d-flex flex-column justify-content-center align-items-center">
            @yield('content')
        </div>
    </main>
    <footer class="text-end">
        <img src="https://i.pinimg.com/originals/f0/2f/78/f02f786e4b205a91284f8fca6eb35c07.jpg" alt="" width="30px" height="auto" class="rounded-5">
        <span>Guardián</span>
        <img src="https://i.pinimg.com/originals/f0/2f/78/f02f786e4b205a91284f8fca6eb35c07.jpg" alt="" width="30px" height="auto" class="rounded-5">

    </footer>
</body>
<script src= "{{asset('js/script.js')}}"></script>
</html>