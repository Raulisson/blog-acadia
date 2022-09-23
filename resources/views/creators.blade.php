<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criadores</title>

    {{-- CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/homestyle.css') }}">
    {{-- Fontawesome --}}
    <script src="https://kit.fontawesome.com/92e90f8568.js" crossorigin="anonymous"></script>

</head>
<body>
    <div class="main-container">
        <div class="title-container">
            <i class="fa-thin fa-eye-slash"></i>
            <img src="{{ asset('img/logo.png') }}" class="title-image">
            <a href="http://127.0.0.1:8000/profile"><i class="fa-solid fa-circle-user"></i></a>
        </div>
        <div class="header">
            <a href="http://127.0.0.1:8000/">Home</a>
            <i class="fa-solid fa-hat-wizard"></i>
            <a href="http://127.0.0.1:8000/majornotices">Principais Notícias</a>
            <i class="fa-solid fa-hat-wizard"></i>
            <a href="http://127.0.0.1:8000/creators">Quem Somos</a>
            <i class="fa-solid fa-hat-wizard"></i>
            <a href="http://127.0.0.1:8000/contact">Contato</a>
        </div>
    </div>

</body>
</html>
