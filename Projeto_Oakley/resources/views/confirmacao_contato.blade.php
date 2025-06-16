@extends('template')

@section('titulo', 'Confirmação de Contato')

@section('conteudo')
<div class="relative w-full min-h-screen bg-blue-900 flex flex-col items-center justify-center py-12 px-4 sm:px-6 lg:px-8">

    <div class="relative z-20 w-full mb-8 text-center">
        <h2 class="text-white text-4xl md:text-5xl font-extrabold tracking-tight leading-tight">
            Mensagem Enviada!
        </h2>
        <p class="text-blue-300 text-lg md:text-xl mt-4 max-w-2xl mx-auto">
            Agradecemos o seu contato. Em breve entraremos em contato com você.
        </p>

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mt-6 max-w-md mx-auto" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif
    </div>

    <div class="relative z-20 w-full max-w-md mx-auto px-4 mt-8">
        <div class="bg-white py-8 px-6 rounded-2xl shadow-2xl text-center">
            <i class="fas fa-check-circle text-green-500 text-6xl mb-4"></i>
            <p class="text-gray-800 text-lg mb-6">
                Sua mensagem foi recebida com sucesso!
            </p>

            <a href="/" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-150 ease-in-out">
                <i class="fas fa-home mr-2"></i> Voltar para a Home
            </a>
            <a href="/contato" class="inline-flex items-center mt-6 sm:mt-3 sm:ml-0 px-6 py-3 border border-gray-300 rounded-md shadow-sm text-base font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-150 ease-in-out">
                <i class="fas fa-envelope mr-2"></i> Enviar Nova Mensagem
            </a>
        </div>
    </div>
</div>
@endsection