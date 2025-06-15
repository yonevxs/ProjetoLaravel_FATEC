<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AppController extends Controller
{
    public function home(){
        $cards = [
            [
                'imagem' => asset('imgs/oculos.jpg'),
                'nome' => 'Autenticidade',
                'texto' => 'Criamos produtos que celebram a individualidade e o espírito original. Nosso design é ousado e sempre fiel à nossa essência única.',
            ],
            [
                'imagem' => 'https://static-00.iconduck.com/assets.00/laravel-icon-249x256-4gdjrenn.png',
                'nome' => 'Performance',
                'texto' => 'Nascemos para desafiar os limites do possível. Com tecnologia de ponta, impulsionamos atletas e entusiastas a irem sempre além',
            ],
            [
                'imagem' => 'https://static-00.iconduck.com/assets.00/laravel-icon-497x512-uwybstke.png',
                'nome' => 'Inovação',
                'texto' => 'Nunca nos contentamos com o comum, redefinimos padrões. Constantemente exploramos novas ideias e tecnologias revolucionárias.',
            ],
            [
                'imagem' => 'https://static-00.iconduck.com/assets.00/laravel-icon-249x256-4gdjrenn.png',
                'nome' => 'Qualidade',
                'texto' => 'Do conceito à fabricação, cada detalhe é feito com precisão. Garantimos produtos duradouros e com performance superior.',
            ]
            ];
        return view('home', ['cards' => $cards]);
    }
}

