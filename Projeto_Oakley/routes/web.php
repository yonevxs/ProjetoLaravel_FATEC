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