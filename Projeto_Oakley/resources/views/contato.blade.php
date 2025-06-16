@extends('template')

@section('titulo', 'Contato')

@section('conteudo')
<div class="relative w-full h-screen flex">
    <div class="bg-[rgb(252,248,239)] py-12 rounded-lg shadow-xl mx-auto w-200 mt-16 h-140">
        <div class="container mx-auto px-4">
            <h3 class="font-[Schibsted_Grotesk] text-gray-800 text-3xl font-bold tracking-wide uppercase text-center mb-15 mt-[-20px]">Fale Conosco</h3>

            <form class="max-w-sm mx-auto mt-[-50px]" action="">
                <div class="mb-5">
                    <label class="block text-sm font-medium text-gray-900 dark:text-gray-900 ml-1" for="name">Nome</label>
                    <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white font-bold" placeholder="Seu Nome" type="text" required>
                </div>

                <div class="mb-5">
                    <label class="block text-sm font-medium text-gray-900 dark:text-gray-900 ml-1" for="email">E-mail</label>
                    <input  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white font-bold" placeholder="email@email.com" type="email" required>
                </div>
        
                <div class="mb-5">
                    <label class="block text-sm font-medium text-gray-900 dark:text-gray-900 ml-1" for="assunto">Assunto</label>
                    <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white font-bold" placeholder="Seu Assunto" type="text">
                </div>

                <div class="mb-5">
                    <label class="block text-sm font-medium text-gray-900 dark:text-gray-900 ml-1" for="mensagem">Mensagem</label>
                    <textarea class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white font-bold" placeholder="Sua Mensagem" name="mensagem" id="mensagem" rows="7" cols="50"></textarea>
                </div>
                    
                <div class="mb-5 flex justify-center">
                    <input class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center mt-[-10px]" type="submit" value="Enviar">
                </div>
                </form>
        </div>
    </div>
</div>

@endsection