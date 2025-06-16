@extends ('template')

@section('titulo', 'Home')

@section('conteudo')
<div class="text-center py-12">
    <h1 class="font-[Archivo_Black] text-white text-5xl md:text-6xl font-extrabold tracking-tight uppercase mb-6">O FUTURO É AGORA</h1>
</div>

<div class="bg-[rgb(252,248,239)] py-16 h-120 rounded-xl shadow-xl mx-auto max-w-6xl mt-[-55px]">
    <div class="container mx-auto px-4">
        <h3 class="font-[Schibsted_Grotesk] text-gray-800 text-3xl md:text-4xl font-bold tracking-wide uppercase text-center mb-12">Nossos valores são</h3>
            <div class="flex flex-wrap gap-x-8 gap-y-12 justify-center p-3">
                @foreach ($cards as $crds)
                    <div class="w-[240px] px-2 bg-gray-100 rounded-lg shadow-xl/15 overflow-hidden p-4 mt-[-30px] text-gray-800 transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-105 border border-gray-200">
                        <img class="w-full h-24 object-contain mx-auto rounded-md mb-4" src="{{ $crds['imagem'] }}" alt="{{ $crds['nome'] }}">
                        <div class="p-px16">
                            <h3 class="text-lg font-semibold mb-2 text-center">{{ $crds['nome'] }}</h3>
                            <p class="text-sm text-gray-600 mb-2 text-center">{{ $crds['texto']}}</p>
                        </div>
                        <a href="sobre">
                            <div class="bg-teal-500 text-white text-center py-2 rounded-b-lg font-bold">Saiba mais</div>
                            </a>
                    </div>
                @endforeach
            </div>
    </div>
</div>

@endsection