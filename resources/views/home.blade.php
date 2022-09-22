<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog | Torres de Acadia |</title>

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
            <i class="fa-solid fa-circle-user"></i>
        </div>
        <div class="header">
            <h1>Home</h1>
            <i class="fa-solid fa-hat-wizard"></i>
            <h1>Principais Notícias</h1>
            <i class="fa-solid fa-hat-wizard"></i>
            <h1>Quem Somos</h1>
            <i class="fa-solid fa-hat-wizard"></i>
            <h1>Contato</h1>
        </div>
    </div>
</body>
</html>
