<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Repositorio - Los Enlaces</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
</head>
<body>
    <header>
        <img src="{{ asset('img/logo_repositorio.jpg') }}" alt="">
        <h1>@yield('title')</h1>
        <button type="button" onclick="location.href='/repoenlaces/public'"
            class="
            focus:outline-none
            text-white
            bg-yellow-400
            hover:bg-yellow-500
            focus:ring-4
            focus:ring-yellow-300
            font-medium rounded-lg
            text-sm
            px-5
            py-2.5
            me-2
            mb-2
            dark:focus:ring-yellow-900">
            Cerrar sesión
        </button>
    </header>
    @yield('main')
</body>
</html>