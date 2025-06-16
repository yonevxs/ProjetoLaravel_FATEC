@extends('template')

@section('titulo', 'Dashboard Administrativa')

@section('conteudo')
<div class="relative w-full min-h-screen bg-blue-900 flex flex-col items-center justify-center py-12 px-4 sm:px-6 lg:px-8">

    <div class="relative z-20 w-full mb-10 text-center">
        <h2 class="text-white text-4xl md:text-5xl font-extrabold tracking-tight leading-tight">
            Bem-vindo(a), <span class="text-blue-200">{{ session('usuario_nome') }}</span>!
        </h2>
        <p class="text-blue-300 text-lg md:text-xl mt-4">
            Gerencie seu site através dos atalhos abaixo.
        </p>
    </div>

    <div class="relative z-20 w-full max-w-5xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

        <a href="/cadastro_usuario" class="block">
            <div class="bg-white py-6 px-6 rounded-2xl shadow-2xl hover:shadow-3xl transform hover:-translate-y-1 transition duration-200 ease-in-out flex flex-col items-center text-center">
                <i class="fas fa-user-plus text-blue-600 text-5xl mb-4"></i>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Cadastro de Usuários</h3>
                <p class="text-gray-600 text-sm">Crie novos usuários para o sistema.</p>
            </div>
        </a>

        <a href="/form_produto" class="block">
            <div class="bg-white py-6 px-6 rounded-2xl shadow-2xl hover:shadow-3xl transform hover:-translate-y-1 transition duration-200 ease-in-out flex flex-col items-center text-center">
                <i class="fas fa-box-open text-green-600 text-5xl mb-4"></i>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Cadastro de Produtos</h3>
                <p class="text-gray-600 text-sm">Adicione novos produtos ao catálogo.</p>
            </div>
        </a>

        <a href="/usuarios" class="block">
            <div class="bg-white py-6 px-6 rounded-2xl shadow-2xl hover:shadow-3xl transform hover:-translate-y-1 transition duration-200 ease-in-out flex flex-col items-center text-center">
                <i class="fas fa-users text-purple-600 text-5xl mb-4"></i>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Lista de Usuários</h3>
                <p class="text-gray-600 text-sm">Visualize e gerencie todos os usuários.</p>
            </div>
        </a>

        <a href="/produtos" class="block">
            <div class="bg-white py-6 px-6 rounded-2xl shadow-2xl hover:shadow-3xl transform hover:-translate-y-1 transition duration-200 ease-in-out flex flex-col items-center text-center">
                <i class="fas fa-boxes text-orange-600 text-5xl mb-4"></i>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Lista de Produtos</h3>
                <p class="text-gray-600 text-sm">Consulte e edite os produtos existentes.</p>
            </div>
        </a>

        <a href="/contato" class="block"> {{-- Ajuste o href se sua rota para a lista de contatos for diferente --}}
            <div class="bg-white py-6 px-6 rounded-2xl shadow-2xl hover:shadow-3xl transform hover:-translate-y-1 transition duration-200 ease-in-out flex flex-col items-center text-center">
                <i class="fas fa-address-book text-red-600 text-5xl mb-4"></i>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Lista de Contatos</h3>
                <p class="text-gray-600 text-sm">Visualize todas as mensagens de contato.</p>
            </div>
        </a>

        <a href="/logout" class="block">
            <div class="bg-red-700 py-6 px-6 rounded-2xl shadow-2xl hover:shadow-3xl transform hover:-translate-y-1 transition duration-200 ease-in-out flex flex-col items-center text-center">
                <i class="fas fa-sign-out-alt text-white text-5xl mb-4"></i>
                <h3 class="text-xl font-bold text-white mb-2">Sair</h3>
                <p class="text-red-200 text-sm">Encerrar a sessão atual.</p>
            </div>
        </a>

    </div>
</div>
@endsection