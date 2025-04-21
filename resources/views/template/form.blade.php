@extends('layouts.app')
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>if{{$tipo == 'login' ? 'Login' : 'Cadastro'}}</title>
</head>

<body>
    <main>
        <section id="section_form">
            <div id="logo_formulario">
                <img src="{{ asset('assets/DevTheBlaze.png') }}" alt="">
            </div>
            <div>
                <h1>{{ $tipo == 'login' ? 'Login' : 'Cadastro' }}</h1>
            </div>
            <form action="{{ $tipo == 'login' ? route('login-store') : route('cadastro') }}" method="POST">
                @csrf
                <div class="input-container">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="txtlogin" id="txtlogin" placeholder="NIF">
                </div>

                <div class="input-container">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="txtsenha" id="txtsenha" placeholder="Senha">
                </div>

                @if ($tipo == 'cadastro')
                <div class="input-container">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="txtsenha_confirmacao" id="txtsenha_confirmacao" placeholder="Confirmar Senha">
                </div>
                @endif

                <button type="submit">{{ $tipo == 'login' ? 'Acessar' : 'Cadastrar' }}</button>

                <a href="{{route ('cadastro-store')}}">
                    {{ $tipo == 'login' ? 'Cadastre-se' : 'Já tem uma conta?' }}
                </a>
            </form>
        </section>
    </main>
    @if(session('erro_senha'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'As senhas não coincidem!',
            text: '{{ session('
            erro_senha ') }}'
        });
    </script>
    @endif



</body>

</html>