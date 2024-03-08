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
<div class="bg-yellow-300 py-4 px-6 flex justify-between items-center">
    <!-- Logo -->
    <div class="flex items-center">
        <img src="caminho_para_sua_logo.png" alt="Logo" class="h-8 w-auto mr-4">
        <span class="text-lg font-bold">Minha Empresa</span>
    </div>

    <!-- Opções de Página -->
    <ul class="flex items-center space-x-6">
        <li><a href="{{ route('home') }}" class="text-gray-800 hover:text-gray-600">Home</a></li>
        <li><a href="{{ route('aboutus') }}" class="text-gray-800 hover:text-gray-600">Sobre Mim</a></li>
        <li><a href="{{ route('contact') }}" class="text-gray-800 hover:text-gray-600">Contato</a></li>
    </ul>
</div>
</body>
</html>