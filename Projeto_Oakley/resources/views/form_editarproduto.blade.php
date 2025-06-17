@extends('template')

@section('titulo', 'Editar Produto')

@section('conteudo')
<div class="relative w-full min-h-screen bg-blue-900 flex flex-col items-center justify-center py-12 px-4 sm:px-6 lg:px-8">

    <div class="relative z-20 w-full mb-8 text-center">
        <h2 class="text-white text-4xl md:text-5xl font-extrabold tracking-tight leading-tight">
            Editar Produto
        </h2>
        <p class="text-blue-300 text-lg md:text-xl mt-4 max-w-2xl mx-auto">
            Atualize as informações do seu produto.
        </p>
    </div>

    <div class="relative z-20 w-full max-w-2xl mx-auto px-4">
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
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="/atualizarproduto/{{ $prod->id }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                @method('PUT')

                <div>
                    <label for="nome" class="block text-sm font-medium text-gray-700">Nome do Produto</label>
                    <div class="mt-1">
                        <input type="text" id="nome" name="nome" value="{{ old('nome', $prod->nome) }}" required
                               class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm @error('nome') border-red-500 @enderror">
                    </div>
                    @error('nome')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="preco" class="block text-sm font-medium text-gray-700">Preço</label>
                    <div class="mt-1">
                        <input type="number" step="0.01" id="preco" name="preco" value="{{ old('preco', $prod->preco) }}" required
                               class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm @error('preco') border-red-500 @enderror">
                    </div>
                    @error('preco')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="estoque" class="block text-sm font-medium text-gray-700">Estoque</label>
                    <div class="mt-1">
                        <input type="number" id="quantidade" name="quantidade" value="{{ old('quantidade', $prod->quantidade) }}" required
                               class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm @error('quantidade') border-red-500 @enderror">
                    </div>
                    @error('quantidade')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                   <div>
                        <label for="produto_id" class="block text-sm font-medium text-gray-700">ID do Produto</label>
                        <p id="produto_id" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm bg-gray-100 text-gray-700 sm:text-sm">
                        {{ $prod->id }}
                        </p>
                    </div>
                </div>

                <div>
                    <label for="foto" class="block text-sm font-medium text-gray-700">Foto do Produto (opcional)</label>
                    <div class="mt-1 flex items-center space-x-4">
                        <input type="file" id="foto" name="foto" accept="image/*"
                               class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 @error('foto') border-red-500 @enderror">
                        @if($prod->foto)
                            <div class="relative">
                                <img src="{{ asset('storage/' . $prod->foto) }}" alt="Foto atual do Produto" class="w-20 h-20 object-cover rounded-md shadow-sm border border-gray-200">
                                <span class="absolute top-0 right-0 -mt-1 -mr-1 bg-green-500 text-white rounded-full text-xs px-2 py-0.5">Atual</span>
                            </div>
                        @endif
                    </div>
                    @error('foto')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <button type="submit"
                            class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-lg font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-150 ease-in-out">
                        <i class="fas fa-sync-alt mr-2"></i> Atualizar Produto
                    </button>
                </div>

                <div class="mt-6">
                    <a href="/listaprodutos"
                       class="w-full flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm text-lg font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-150 ease-in-out">
                        <i class="fas fa-arrow-left mr-2"></i> Voltar para a Lista de Produtos
                    </a>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection