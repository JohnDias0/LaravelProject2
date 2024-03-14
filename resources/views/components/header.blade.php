<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
<div class="bg-yellow-300 py-4 px-6 mr-7 flex justify-between items-center">
    <!-- Logo -->
    <div class="flex items-center">
    <img src="{{ asset('resources/css/logo.png') }}" alt="Logo" class="h-8 w-auto mr-2">

</div>


    <!-- Opções de Página -->
    <ul class="flex items-center justify-center flex-grow">
        <li class="flex-grow">
            <a href="{{ route('home') }}" class="text-gray-800 hover:text-gray-600">Home</a>
        </li>
        <li class="flex-grow">
            <a href="{{ route('aboutus') }}" class="text-gray-800 hover:text-gray-600">Sobre Mim</a>
        </li>
        <li class="flex-grow">
            <a href="{{ route('contact') }}" class="text-gray-800 hover:text-gray-600">Contato</a>
        </li>
    </ul>
</div>


</body>
</html>