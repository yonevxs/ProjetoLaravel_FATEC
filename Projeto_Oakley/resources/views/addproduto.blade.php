@extends('template')

@section('titulo', 'Produtos')

@section('conteudo')
<div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8 p-10 bg-white rounded-lg shadow-xl">
        <div>
            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                Cadastrar Novo Produto
            </h2>
        </div>
        
        <form class="mt-8 space-y-6" action="" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div>
                <label for="nome" class="block text-sm font-medium text-gray-700">Nome do Produto:</label>
                <input type="text" name="nome" id="nome" required
                       class="appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            </div>

            <div>
                <label for="preco" class="block text-sm font-medium text-gray-700">Preço:</label>
                <input type="number" name="preco" id="preco" step="0.01" required
                       class="appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            </div>

            <div>
                <label for="quantidade" class="block text-sm font-medium text-gray-700">Quantidade:</label>
                <input type="number" name="quantidade" id="quantidade" required
                       class="appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            </div>

            <div>
                <label for="imagem" class="block text-sm font-medium text-gray-700">Imagem do Produto:</label>
                <input type="file" name="imagem" id="imagem" accept="image/*" required
                       class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
            </div>

            <div>
                <button type="submit"
                        class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Cadastrar Produto
                </button>
            </div>
        </form>
    </div>
</div>
@endsection