<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    <link rel="icon" href="{{ asset('imgs/logo_oakley.png')}}" type="image/png">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class="shadow-lg bg-black text-white px-4 py-2 flex flex-col md:flex-row justify-between items-center relative z-10">
        <div class="flex justify-between items-center w-full md:w-auto ">
            <img class="w-24 transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-105" src="{{ asset('imgs/logo_oakley.png') }}" alt="Logo Oakley">
        </div>

        <div class="flex flex-col md:flex-row md:items-center w-full md:w-auto mt-4 md:mt-0">
            <ul class="flex flex-col md:flex-row md:space-x-6 space-y-2 md:space-y-0 text-center md:text-left w-full md:w-auto">
                <li><a href="/" class="hover:text-gray-400 block px-3 py-2 rounded-md text-base font-medium">Home</a></li>
                <li><a href="sobre" class="hover:text-gray-400 block px-3 py-2 rounded-md text-base font-medium">Sobre</a></li>
                <li><a href="produtos" class="hover:text-gray-400 block px-3 py-2 rounded-md text-base font-medium">Produtos</a></li>
                <li><a href="contato" class="hover:text-gray-400 block px-3 py-2 rounded-md text-base font-medium">Contato</a></li>
            </ul>
            <div class="login_button md:ml-6 mt-4 md:mt-0 w-full md:w-auto"> 
                <a href="login" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded block w-full md:w-auto transition duration-300 ease-in-out">Entrar</a>
            </div>
        </div>
    </header>
    <main class="color_body">
        @yield('conteudo')
    </main>
    <footer >
        <div class="bg-gray-900 w-full md:w-auto text-white">
            <p class="font-[Schibsted_Grotesk] text-[12px] p-5 font-medium text-center leading-relaxed ml-5">
                Lucas Henrique Neves Sousa & Gustavo Lemos de Oliveira
            </p>
            
            <p class="font-[Schibsted_Grotesk] text-[12px] p-2 leading-relaxed ml-5 mt-[-15px] text-center">
                FATECPG - 2025
            </p>
        </div>
    </footer>
</body>
</html>