<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContadorController extends Controller
{
    public function retorna_login()
    {
        return view('screens.login', ['tipo' => 'login']);
    }

    public function retorna_cadastro()
    {
        return view('screens.cadastro', ['tipo' => 'cadastro']);
    }
    public function retorna_calendario(){
        return view('screens.calendario');
    }

    public function retorna_categorias(){
        return view('screens.categorias');
    }

    public function retorna_contagens(){
        return view('screens.contagens');
    }

    public function retorna_estoque(){
        return view('screens.estoque');
    }

}
