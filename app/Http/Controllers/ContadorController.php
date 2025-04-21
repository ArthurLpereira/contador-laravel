<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ContadorModel;

class ContadorController extends Controller
{
    // Functions Relacionadas a Cadastro
    public function retorna_cadastro()
    {
        return view('screens.cadastro', ['tipo' => 'cadastro']);
    }

    public function cadastro_store(Request $request)
    {
        $senha = $request->input('txtsenha');
        $confirmacao = $request->input('txtsenha_confirmacao');

        if ($senha !== $confirmacao) {
            return redirect()->back()
                ->withInput()
                ->with('erro_senha', 'As senhas não coincidem!');
        }

        // Inserir usuário no banco de dados
        DB::table('usuarios')->insert([
            'nome_usuario' => $request->input('txtlogin'),
            'senha_usuario' => Hash::make($senha), // importante criptografar a senha
            'nivel_usuario' => 1, // ou o nível que você quiser definir (ex: 1 = padrão)
            'ativo_usuario' => 1 // cadastra como ativo
        ]);

        return redirect()->route('login')->with('sucesso', 'Cadastro realizado com sucesso!');
    }


    public function retorna_login()
    {
        return view('screens.login', ['tipo' => 'login']);
    }
    public function retorna_calendario()
    {
        return view('screens.calendario');
    }

    public function retorna_categorias()
    {
        return view('screens.categorias', ['tipo' => 'contagem_categorias']);
    }

    public function retorna_contagens()
    {
        return view('screens.contagens');
    }

    public function retorna_estoque()
    {
        return view('screens.estoque');
    }

    public function retorna_relatorio()
    {
        return view('screens.relatorio', ['tipo' => 'contagem_relatorio']);
    }

    public function autenticar(Request $request)
    {
        // Validação básica
        $request->validate([
            'txtlogin' => 'required|string',
            'txtsenha' => 'required|string',
        ]);

        $credenciais = [
            'nome_usuario' => $request->txtlogin,
            'password' => $request->txtsenha
        ];

        // Tentativa de login
        if (Auth::attempt($credenciais)) {
            $request->session()->regenerate();
            return redirect()->route('painel');
        }

        return back()->withErrors([
            'txtlogin' => 'Login ou senha inválidos',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
