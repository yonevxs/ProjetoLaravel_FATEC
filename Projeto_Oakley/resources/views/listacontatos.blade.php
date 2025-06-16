@extends('template')

@section('titulo', 'Lista de Contatos')

@section('conteudo')
<div class="relative w-full min-h-screen bg-blue-900 flex flex-col items-center justify-center py-12 px-4 sm:px-6 lg:px-8">

    <div class="relative z-20 w-full mb-8 text-center">
        <h2 class="text-white text-4xl md:text-5xl font-extrabold tracking-tight leading-tight">
            Lista de Contatos
        </h2>
        <p class="text-blue-300 text-lg md:text-xl mt-4 max-w-2xl mx-auto">
            Todas as mensagens enviadas pelo formulário de contato.
        </p>
    </div>

    <div class="relative z-20 w-full max-w-6xl mx-auto px-4">
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

            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-orange-500">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                            Nome
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                            E-mail
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                            Assunto
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                            Mensagem
                        </th>
                        <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">Ações</span>
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($mensagens as $msg)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{ $msg->nome }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $msg->email }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $msg->assunto }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 max-w-xs overflow-hidden text-ellipsis">
                                {{ $msg->mensagem }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                {{-- Botão Excluir (voltou ao formulário padrão) --}}
                                <form action="/excluircontato/{{ $msg->id }}" method="POST" class="inline-block mr-2">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded shadow-sm text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition duration-150 ease-in-out" onclick="return confirm('Tem certeza que deseja excluir esta mensagem?')">
                                        <i class="fas fa-trash-alt mr-1"></i> Excluir
                                    </button>
                                </form>

                                <a href="mailto:{{ $msg->email }}?subject=Re:%20{{ $msg->assunto }}" class="inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded shadow-sm text-white bg-orange-500 hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-400 transition duration-150 ease-in-out">
                                    <i class="fas fa-reply mr-1"></i> Responder
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                                Nenhuma mensagem de contato encontrada.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            <div class="mt-6">
                <a href="/dashboard"
                   class="w-full flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm text-lg font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-150 ease-in-out">
                    <i class="fas fa-arrow-left mr-2 mt-[7px]"></i> Voltar para o Dashboard
                </a>
            </div>

        </div>
    </div>
</div>
@endsection