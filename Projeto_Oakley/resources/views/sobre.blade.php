@extends('template')

@section('titulo', 'Sobre')

@section('conteudo')
<div class="relative w-full min-h-screen overflow-hidden flex items-center justify-center">
    <img class="absolute inset-0 w-full h-full object-cover z-0" src="{{ asset('imgs/capa_oakleyXkyan.jpg') }}" alt="Capa - Kyan & Mu540 X Oakley">

    <div class="absolute inset-0 z-10" style="background-color: rgba(0, 0, 0, 0.6);"></div>
    
    <div class="relative z-20 w-full mt-15 mb-16">
        
        <div class="bg-[rgb(243,242,239)] py-16 px-10 h-[860px] rounded-xl mx-auto shadow-xl max-w-4xl">
            
            <p class="text-lg text-gray-800 leading-relaxed text-justify font-medium">Nosso projeto visa criar uma plataforma online dinâmica e eficiente para a renomada marca Oakley, focando na gestão intuitiva de produtos e usuários. Este site, desenvolvido com o poderoso framework Laravel, opera como um sistema completo de CRUD (Create, Read, Update, Delete), permitindo total controle sobre o catálogo de produtos e a administração de usuários. Além disso, a estilização foi feita com base no framework TailwindCSS, uma ferramenta poderosa para estilização de sites, melhorando seu visual e responsividade.</p>

            <p class="text-lg text-gray-800 leading-relaxed text-justify font-medium mt-6">Através de uma interface administrativa otimizada, pé possível adicionar novos produtos e suas especificações, remover itens,alterar detalhes como descrições, preços e imagens. Da mesma forma, a gestão de usuários administradores é simplificada, garantindo que a equipe responsável possa adicionar novos membros, remover acessos quando necessário e alterar permissões ou informações de perfil com facilidade e segurança. Este sistema é a espinha dorsal para uma operação digital fluida e escalável, refletindo a excelência e inovação que a Oakley representa.</p>

            <h2 class="font-[Schibsted_Grotesk] text-gray-800 text-3xl md:text-4xl font-extrabold tracking-tight text-center mt-10 mb-10 ">Equipe do Projeto</h2>

            <div class="flex flex-wrap gap-x-8 gap-y-12 justify-center p-3">
                @foreach($dev_cards as $crds)
                <div class="w-[240px] max-w-64 h-55 bg-white rounded-lg shadow-sm dark:bg-gray-500 dark:border-gray-700 transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-105">
                    <div class="flex justify-end px-4 pt-4"></div>
                        <div class="flex flex-col items-center pb-10">
                        <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ $crds['pfp'] }}" alt="Foto do Desenvolvedor"/>
                        <h5 class="mb-1 text-xl text-[15px] font-medium text-gray-900 dark:text-white text-center">{{ $crds['nome'] }}</h5>
                        <p class="text-[11px] font-medium text-gray-800 dark:text-gray-800 text-center">{{ $crds['funcao']}}</p>
                    </div>
                </div>
                    @endforeach
            </div>
        </div>
    </div>

</div>

@endsection