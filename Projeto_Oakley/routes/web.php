<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

#Rota para passar o diretório raiz como a página home, que utiliza o template.blade!
Route::get('/', [AppController::class, 'home']);

Route::get('/sobre', [AppController::class, 'sobre']);

Route::get('/contato', [AppController::class, 'contato']);

Route::get('/form_produto', [AppController::class, 'form_produto']);

Route::post('/addproduto', [AppController::class, 'addproduto']);

Route::get('/produtos', [AppController::class, 'produtos']);


//formulario para cadastro usuario
Route::get('/cadastro_usuario',[AppController::class, 'cadastro_usuario']); 
//cadastro de usuario      
Route::post('/addusuario',[AppController::class, 'addusuario']);
//lista de usuarios 
Route::get('/usuarios',[AppController::class, 'usuarios']);

Route::get('/cadastro_usuario/{id}',[AppController::class, 'form_editusuario']);

//formulario de edição de usuario 
Route::get('/form_editarusuario/{id}', [AppController::class, 'form_editarusuario']);
//UPDATE usuario
Route::put('/atualizarusuario/{id}',[AppController::class,'atualizarusuario']);
//Deletar usuario 
Route::delete('/excluirusuario/{id}',[AppController::class,'excluirusuario']);

Route::get('/login', [AppController::class, 'login']);
Route::post('/logar', [AppController::class, 'logar']);
Route::get('/dashboard', [AppController::class, 'dashboard']);
Route::get('/logout', [AppController::class, 'logout']);