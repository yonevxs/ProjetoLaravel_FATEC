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
        return view('home', ['cards' => $cards]);
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
    public function contato(){
        return view('contato');
    }
    public function addproduto(Request $request){
        $produto = new Produto();

        $produto->nome = $request->nome;
        $produto->preco = $request->preco;
        $produto->quantidade = $request->quantidade;

        if($request->hasFile('imagem')){
            $path = $request->file('imagem')->store('imagens', 'public');
            $produto->imagem = $path;
        }
        $produto->save();

        return redirect('produtos');
    }
    public function form_produto(){
        return view('form_produto');
    }
    public function produtos(){
        $produto = Produto::all();
        return view('produtos', ['produtos' => $produto]);
    }


    
    //USUARIO
    public function cadastro_usuario(){
        return view('cadastro_usuario');
    }

    public function usuarios(){
        $usuarios = Usuario::all();
        return view ('usuarios',['users'=>$usuarios]);
    }

    public function addusuario (Request $request){
        
        $usuario = new Usuario();
        $usuario ->nome = $request->unome;
        $usuario ->email = $request->uemail;
        $usuario ->senha = Hash::make($request->usenha);
        $usuario -> save();
       return redirect('login')->with('success', 'Usuário cadastrado com sucesso!');

    }

    public function form_editarusuario($id){
        $usuario = Usuario::findOrFail($id);
        return view ('form_editarusuario',['user' =>$usuario]);
    }

    public function excluirusuario($id){

        $usuario = Usuario::findOrFail($id);
        $usuario->delete();
        return redirect('usuarios');  
    }

    public function login(){
    return view('login');
    }
    public function logar(Request $request){
        $usuario = Usuario::where('email', $request->email)->first();

        if (!$usuario || !Hash::check($request->senha, $usuario->senha)) {
            return redirect('/login')->with('error', 'E-mail ou senha inválidos.');
        }

        Session::put('usuario_id', $usuario->id);
        Session::put('usuario_nome', $usuario->nome);
        
        return redirect('/dashboard');
    }
    public function dashboard() {
    if (!session()->has('usuario_id')) {
        return redirect('/login');
    }
    return view('dashboard');
    }
    public function logout() {
        Session::flush();
        return redirect('/');
    }
    public function atualizarusuario(Request $request, $id){
        $usuario = Usuario::findOrFail($id);
        
        $rules = [
            'unome' => 'required|string|max:255',
            'uemail' => 'required|string|email|max:255|unique:usuarios,email,' . $usuario->id,
        ];

        if ($request->filled('usenha')) { 
            $rules['usenha'] = 'string|min:3|confirmed';
        }

        $request->validate($rules);

        $dados = [
            'nome' => $request->unome, 
            'email' => $request->uemail, 
        ];

        if ($request->filled('usenha')) {
            $dados['senha'] = Hash::make($request->usenha);
        }

        $usuario->update($dados); 
        return redirect('usuarios')->with('success', 'Usuário atualizado com sucesso!');
    }

 }

