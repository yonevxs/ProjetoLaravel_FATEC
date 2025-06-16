@extends('template')

@section('titulo', 'Produtos')

@section('conteudo')
<div class="relative w-full min-h-screen bg-blue-900 flex flex-col items-center justify-center py-12">
    <div class="relative z-20 w-full mb-12">
        <h2 class="text-white text-4xl md:text-5xl font-extrabold tracking-tight text-center leading-tight">
            Descubra Nossos Produtos Exclusivos
        </h2>
        <p class="text-blue-200 text-lg md:text-xl text-center font-bold mt-4 max-w-2xl mx-auto">
            Qualidade, inovação e estilo em cada item.
        </p>
    </div>

    <div class="relative z-20 w-full max-w-7xl mx-auto px-4">
        <div class="bg-white py-12 rounded-2xl shadow-2xl">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap gap-6 justify-center">
                    @foreach ($produtos as $p)
                        <div class="w-60 bg-white rounded-xl shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300 ease-in-out border border-gray-100 flex flex-col overflow-hidden">
                            <div class="p-4 flex-grow flex flex-col justify-between">
                                <div class="mb-4">
                                    <img class="w-full h-32 object-contain mx-auto rounded-md" src="{{ asset('storage/' . $p ['imagem']) }}" alt="{{ $p['nome'] }}">
                                </div>
                                <h3 class="text-xl font-bold text-gray-900 text-center mb-1">{{ $p['nome'] }}</h3>
                                <p class="text-lg text-blue-600 font-semibold text-center mb-2">R$ {{ number_format($p['preco'], 2, ',', '.') }}</p>
                                <p class="text-sm text-gray-500 text-center">
                                    @if($p['quantidade'] > 0)
                                        <span class="font-medium text-green-600">{{ $p['quantidade'] }}</span> disponíveis
                                    @else
                                        <span class="font-medium text-red-600">Esgotado</span>
                                    @endif
                                </p>
                            </div>
                            <div class="bg-blue-800 text-center py-3">
                                <a href="#" class="text-white text-sm font-semibold uppercase tracking-wider hover:underline">Ver Detalhes</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection