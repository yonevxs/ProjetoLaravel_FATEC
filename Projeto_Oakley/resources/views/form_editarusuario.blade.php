@extends('template')

@section('titulo', 'Editar Usuário')

@section('conteudo')
<div class="relative w-full min-h-screen bg-blue-900 flex flex-col items-center justify-center py-12 px-4 sm:px-6 lg:px-8">

    <div class="relative z-20 w-full mb-8 text-center">
        <h2 class="text-white text-4xl md:text-5xl font-extrabold tracking-tight leading-tight">
            Editar Usuário
        </h2>
        <p class="text-blue-300 text-lg md:text-xl mt-4 max-w-2xl mx-auto">
            Atualize as informações do usuário.
        </p>
    </div>

    <div class="relative z-20 w-full max-w-md mx-auto px-4">
        <div class="bg-white py-8 px-6 rounded-2xl shadow-2xl">

            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif
            @if(session('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <span class="block sm:inline">{{ session('error') }}</span>
                </div>
            @endif
            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="/atualizarusuario/{{$user->id}}" method="POST" class="space-y-6" enctype="multipart/form-data">
                @csrf
                @method('put')

                <div>
                    <label for="unome" class="block text-sm font-medium text-gray-700 mb-1">Nome</label>
                    <input type="text" id="unome" name="unome" required
                           value="{{ old('unome', $user->nome) }}" {{-- ALTERADO AQUI: $usuario->nome para $user->nome --}}
                           class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm placeholder-gray-400">
                    @error('unome')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="uemail" class="block text-sm font-medium text-gray-700 mb-1">E-mail</label>
                    <input type="email" id="uemail" name="uemail" required
                           value="{{ old('uemail', $user->email) }}" {{-- ALTERADO AQUI: $usuario->email para $user->email --}}
                           class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm placeholder-gray-400">
                    @error('uemail')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="usenha" class="block text-sm font-medium text-gray-700 mb-1">Senha</label>
                    <input type="password" id="usenha" name="usenha"
                           placeholder="Deixe em branco para manter a senha atual"
                           class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm placeholder-gray-400">
                    @error('usenha')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="usenha_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Confirmar Senha (se alterar)</label>
                    <input type="password" id="usenha_confirmation" name="usenha_confirmation"
                           class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm placeholder-gray-400">
                </div>

                <div>
                    <button type="submit"
                            class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-lg font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-150 ease-in-out">
                        Atualizar Usuário
                    </button>
                </div>
            </form>

            {{-- Botão de Voltar para o Dashboard --}}
            <div class="mt-6">
                <a href="/dashboard"
                   class="w-full flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm text-lg font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-150 ease-in-out">
                    <i class="fas fa-arrow-left mr-2 mt-[6px]"></i> Voltar para o Dashboard
                </a>
            </div>

        </div>
    </div>
</div>
@endsection