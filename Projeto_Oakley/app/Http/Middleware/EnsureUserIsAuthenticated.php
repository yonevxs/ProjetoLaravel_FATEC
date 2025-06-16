<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session; // Importar a classe Session

class EnsureUserIsAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Verifica se a sessão 'usuario_id' existe.
        // Se o usuário não está logado (ou a sessão expirou), redireciona para a página de login.
        if (!Session::has('usuario_id')) {
            return redirect('/login')->with('error', 'Por favor, faça login para acessar esta área.');
        }

        // Se o usuário está logado, permite que a requisição continue para a próxima etapa (controller, etc.)
        return $next($request);
    }
}