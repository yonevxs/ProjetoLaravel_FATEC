@extends ('template')

@section('titulo', 'Home')

@section('conteudo')
<!-- <div class="text-center py-12">
    <h1 class="font-[Archivo_Black] text-white text-5xl md:text-6xl font-extrabold tracking-tight uppercase mb-6">O FUTURO É AGORA</h1>
</div>

<div class="bg-white py-16 w-300 h-115 rounded-xl ml-20 mt-[-40px] shadow-xl/30">
    <div class="container mx-auto px-4">
        <h3 class="font-[Schibsted_Grotesk] text-gray-800 text-3xl font-bold tracking-wide uppercase text-center mb-12">Nossos valores são</h3>
            <div class="flex flex-wrap gap-x-8 gap-y-12 justify-center p-3">
                @foreach ($cards as $crds)
                    <div class="w-[240px] px-2 bg-gray-900 rounded-lg shadow-md overflow-hidden p-4 mt-[-30px] text-white transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-105 border border-gray-200">
                        <img class="w-24 h-24 object-contain mx-auto rounded-md mb-4" src="{{ $crds['imagem'] }}" alt="{{ $crds['nome'] }}">
                        <div class="p-px15">
                            <h3 class="text-lg font-semibold mb-2 text-center">{{ $crds['nome'] }}</h3>
                            <p class="text-sm text-gray-400 mb-2 text-center">{{ $crds['texto']}}</p>
                        </div>
                        <div class="bg-teal-500 text-white text-center py-2 rounded-b-lg">Saiba mais</div>
                    </div>
                @endforeach
            </div>
    </div>
</div> -->

        <div class="text-center py-16 bg-blue-900"> <h1 class="text-white text-5xl md:text-6xl font-extrabold tracking-tight uppercase mb-6">
        O FUTURO É AGORA
    </h1>
    </div>

<div class="bg-white py-16"> 
    <div class="container mx-auto px-4"> <h2 class="font-[Schibsted_Grotesk] text-gray-800 text-3xl font-bold tracking-wide uppercase text-center mb-12">
            Nossos valores são
        </h2>
        <div class="flex flex-wrap gap-x-8 gap-y-12 justify-center p-3">
            @foreach ($cards as $crds) {{-- Supondo que você tenha um array $cardsValores --}}
                <div class="w-[240px] px-2 bg-gray-100 rounded-lg shadow-md overflow-hidden p-4 text-gray-800 transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-105 border border-gray-200">
                    <img class="w-24 h-24 object-contain mx-auto rounded-md mb-4" src="{{ $crds['imagem'] }}" alt="{{ $crds['nome'] }}">
                    <div class="p-px15">
                        <h3 class="text-lg font-semibold mb-2 text-center text-blue-700">{{ $crds['nome'] }}</h3>
                        <p class="text-sm text-gray-600 mb-2 text-center">{{ $crds['texto']}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


@endsection