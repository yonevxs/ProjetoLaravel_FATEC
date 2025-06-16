<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

#Rota para passar o diretório raiz como a página home, que utiliza o template.blade!
Route::get('/', [AppController::class, 'home']);
Route::get('/sobre', [AppController::class, 'sobre']);

//formulario para cadastro usuario
Route::get('/frmusuario',[AppController::class, 'frmusuario']); 
//cadastro de usuario      
Route::post('/addusuario',[AppController::class, 'addusuario']);
//lista de usuarios 
Route::get('/usuarios',[AppController::class, 'usuarios']);
//formulario de edição de usuario 
Route::get('/frmeditusuario/{id}',[AppController::class, 'frmeditusuario']);
//UPDATE usuario
Route::put('/atualizarusuario/{id}',[AppController::class,'atualizarusuario']);
//Deletar usuario 
Route::delete('/excluirusuario/{id}',[AppController::class,'excluirusuario']);


// Login
Route::get('/frmlogin' , [AppController::class, 'frmlogin']); 
Route::post('/logar', [AppController::class, 'logar']); 
Route::get('/dashboard', [AppController::class, 'dashboard']); 
Route::get('/logout', [AppController::class, 'logout']);
