<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Método para login
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Caso o login seja bem-sucedido, redireciona ou retorna uma resposta
            return redirect()->intended('/dashboard'); // Altere para a rota que desejar
        }

        // Se falhar, retorna um erro
        return redirect()->back()->withErrors(['email' => 'As credenciais não correspondem.']);
    }

    // Método para registro de novos usuários
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Criação do usuário
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // Realiza o login automático após o cadastro
        Auth::login($user);

        // Redireciona após o registro
        return redirect('/dashboard'); // Altere para a rota que desejar
    }

    // Método para logout
    public function logout()
    {
        Auth::logout();

        return redirect('/login'); // Redireciona para a página de login
    }

    // Método para exibir o formulário de login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Método para exibir o formulário de registro
    public function showRegisterForm()
    {
        return view('auth.register');
    }
}