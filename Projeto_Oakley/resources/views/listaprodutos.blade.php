@extends('template')

@section('titulo', 'Lista de Produtos')

@section('conteudo')
<div class="relative w-full min-h-screen bg-blue-900 flex flex-col items-center justify-center py-12 px-4 sm:px-6 lg:px-8">

    <div class="relative z-20 w-full mb-8 text-center">
        <h2 class="text-white text-4xl md:text-5xl font-extrabold tracking-tight leading-tight">
            Lista de Produtos
        </h2>
        <p class="text-blue-300 text-lg md:text-xl mt-4 max-w-2xl mx-auto">
            Gerencie os produtos cadastrados.
        </p>
    </div>

    <div class="relative z-20 w-full max-w-5xl mx-auto px-4">
        <div class="bg-white py-8 px-6 rounded-2xl shadow-2xl overflow-x-auto">

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

            <div class="mb-6 text-right">
                <a href="/form_produto" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition duration-150 ease-in-out">
                    <i class="fas fa-plus mr-2"></i> Adicionar Produto
                </a>
            </div>

            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Código
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Foto
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Nome
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Preço
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Estoque
                        </th>
                        <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">Ações</span>
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($produtos as $p)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{ $p->id }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                @if($p->imagem)
                                    <img src="{{ asset('storage/' . $p->imagem) }}" alt="{{ $p->nome }}" class="h-16 w-16 object-cover rounded-md">
                                @else
                                    N/A
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $p->nome }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                R$ {{ number_format($p->preco, 2, ',', '.') }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $p->quantidade }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">

                                <a href="/form_editarproduto/{{ $p->id }}" class="text-indigo-600 hover:text-indigo-900 mr-4">Editar</a>
                                <form action="/excluirproduto/{{ $p->id }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('Tem certeza que deseja excluir este produto?')">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                                Nenhum produto cadastrado.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

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