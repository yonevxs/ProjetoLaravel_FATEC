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
                'imagem' => asset('imgs/oakleyXpietSkull.png'),
                'nome' => 'Autenticidade',
                'texto' => 'Criamos produtos que celebram a individualidade e o espírito original. Nosso design é ousado e sempre fiel à nossa essência única.',
            ],
            [
                'imagem' => asset('imgs/oakley_sphaera.png'),
                'nome' => 'Performance',
                'texto' => 'Nascemos para desafiar os limites do possível. Com tecnologia de ponta, impulsionamos atletas e entusiastas a irem sempre além',
            ],
            [
                'imagem' => asset('imgs/oculos_plantaris.png'),
                'nome' => 'Inovação',
                'texto' => 'Nunca nos contentamos com o comum, redefinimos padrões. Constantemente exploramos novas ideias e tecnologias revolucionárias.',
            ],
            [
                'imagem' => asset('imgs/oakley_teeth.png'),
                'nome' => 'Qualidade',
                'texto' => 'Do conceito à fabricação, cada detalhe é feito com precisão. Garantimos produtos duradouros e com performance superior.',
            ]
            ];
        return view ('home', ['cards' => $cards]);
    }

    public function sobre(){
        $dev_cards =[
            [
                'nome' => 'Lucas Henrique Neves Sousa',
                'funcao' => 'Designer UX/UI & Desenvolvedor Full-Stack',
                'pfp' => 'imgs/Lucas_pfp.jpg'
            ],
            [
                'nome' => 'Gustavo Lemos de Oliveira',
                'funcao' => 'Desenvolvedor Back-End',
                'pfp' => 'imgs/Gustavo_pfp.jpg'
            ]
            ];
        return view('sobre', ['dev_cards' => $dev_cards]);
    }

    public function frmusuario(){
        return view('frmusuario');
    }

    public function usuarios(){
        $usuarios = Usuario::all();
        return view ('usuarios',['users'=>$usuarios]);
    }

    public function addusuario (Request $request){
        
        $usuario = new Usuario();
        $usuario ->nome = $request->fnome;
        $usuario ->email = $request->femail;
        $usuario ->senha = Hash::make($request->fsenha);
        $usuario -> save();
       return redirect('sobre');

    }

    public function frmeditusuario($id){
        $usuario = Usuario::findOrFail($id);
        return view ('frmeditusuario',['user' =>$usuario]);
    }

    public function atualizarusaurio(Request $request,$id){
        $usuario = Usuario::findOFail($id);

        $dados =[
            'nome' => $request->fnome,
            'email' => $request->femail

        ];
        if(!empty($request->senha)){
            $dados['senha'] = Hash::make($request->fsenha);
        }

        $usuario->update($dados);

        return redirect('usuarios');
    }

    public function excluirusuario($id){

        $usuario = Usuario::findOFail($id);
        $usuario->delete();
        return redirect('usuarios');  
    }


//     public function frmlogin(){

//         return view ('frmlogin');
//     }

//     public function logar(Request $request){

//         $user = Usuario::where('email', $request->email)->first();  
            


//     }
 }