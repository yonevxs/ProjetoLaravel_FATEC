<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <div>
            <h1>Oakley</h1>
        </div>

        <div class = "pagesections">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="">Sobre</a></li>
                <li><a href="">Produtos</a></li>
                <li><a href="">Contato</a></li>
                <li><a href="">Entrar</a></li>
            </ul>
        </div>
    </header>
    <main>
        @yield('conteudo')
    </main>
</body>
</html>