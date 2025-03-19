@extends('layouts.app')
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
<section id="section_form">
        <div id="logo_formulario">
            <img src="{{ asset('assets/DevTheBlaze.png')}}" alt="">
        </div>
        <div>
            <h1>Login</h1>
        </div>
        <form action="" method="POST">
            @csrf
            <div class="input-container">
                <i class="fa-solid fa-user"></i>
                <input type="text" name="txtlogin" id="txtlogin" placeholder="Login">
            </div>

            <div class="input-container">
                <i class="fa-solid fa-lock"></i>
                <input type="password" name="txtsenha" id="txtsenha" placeholder="Senha">
            </div>
            
            <button type="submit">Acessar</button>
            <a href="">Cadastre-se</a>
        </form>
    </section>
</body>
</html>