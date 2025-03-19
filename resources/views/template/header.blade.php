@extends('layouts.app')

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>@yield('tituloHeader')</title>
</head>
<body>
    <header> 
        <div>
            <figure>
                <img src="{{ asset('assets/fig_top.png')}}" alt="Figura topo" id="figura_top">
            </figure>
        </div>
    </header>
</body>
</html>
