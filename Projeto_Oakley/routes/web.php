<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

#Rota para passar o diretório raiz como a página home, que utiliza o template.blade!
Route::get('/', [AppController::class, 'home']);
Route::get('/sobre', [AppController::class, 'sobre']);
Route::get('/contato', [AppController::class, 'contato']);
Route::get('/produtos', [AppController::class, 'produtos']);
Route::get('/login', [AppController::class, 'login']);
Route::get('/contato/confirmacao', [AppController::class, 'confirmacaoContato']);
Route::post('/salvarcontato', [AppController::class, 'salvarContato']);
Route::post('/addusuario',[AppController::class, 'addusuario']);
Route::post('/logar', [AppController::class, 'logar']);
Route::get('/cadastro_usuario',[AppController::class, 'cadastro_usuario']);    

Route::middleware(['auth.custom'])->group(function (){
    //CRUD - Produtos
    Route::get('/form_produto', [AppController::class, 'form_produto']);
    Route::post('/addproduto', [AppController::class, 'addproduto']);
    Route::get('/listaprodutos', [AppController::class, 'listaprodutos']);
    Route::delete('/excluirproduto/{id}', [AppController::class, 'excluirProduto']);
    
    //CRUD - Contato
    Route::get('/listacontatos', [AppController::class, 'listarContatos']);
    Route::delete('/excluircontato/{id}',[AppController::class,'excluirContato']);
    
    //CRUD - Usuarios
    Route::get('/usuarios',[AppController::class, 'usuarios']);
    Route::get('/cadastro_usuario/{id}',[AppController::class, 'form_editusuario']);
    Route::get('/form_editarusuario/{id}', [AppController::class, 'form_editarusuario']);
    Route::put('/atualizarusuario/{id}',[AppController::class,'atualizarusuario']);
    Route::delete('/excluirusuario/{id}',[AppController::class,'excluirusuario']);
    
    Route::get('/dashboard', [AppController::class, 'dashboard']);
    Route::get('/logout', [AppController::class, 'logout']);
});