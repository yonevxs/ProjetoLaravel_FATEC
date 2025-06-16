@extends('template')

@section('titulo', 'Login')

@section('conteudo')
<div class="relative w-full min-h-screen bg-blue-900 flex flex-col items-center justify-center py-12">
    <div class="relative z-20 w-full mb-8">
        <h2 class="text-white text-4xl md:text-5xl font-extrabold tracking-tight text-center leading-tight">
            Acesso Restrito
        </h2>
        <p class="text-blue-200 text-lg md:text-xl text-center mt-4 max-w-2xl mx-auto">
            Por favor, insira suas credenciais para continuar.
        </p>
    </div>

    <div class="relative z-20 w-full max-w-md mx-auto px-4">
        <div class="bg-white py-8 px-6 rounded-2xl shadow-2xl">
            <form action="/logar" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">E-mail</label>
                    <input type="email" id="email" name="email" required
                           class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm placeholder-gray-400">
                </div>

                <div>
                    <label for="senha" class="block text-sm font-medium text-gray-700 mb-1">Senha</label>
                    <input type="password" id="senha" name="senha" required
                           class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm placeholder-gray-400">
                </div>

                <div>
                    <button type="submit"
                            class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-lg font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-150 ease-in-out">
                        Entrar
                    </button>

                    <p class="text-gray-900 text-lg md:text-lg text-center mt-6 max-w-2xl mx-auto font-medium">
                    Não tem uma conta? <a href="cadastro_usuario" class="text-blue-900 hover:underline">Cadastre-se aqui</a>
                    </p> 
                </div>
            </form>
        </div>
    </div>
</div>
@endsection