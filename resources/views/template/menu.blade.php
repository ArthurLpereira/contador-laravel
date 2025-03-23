<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>
    <div class="menu">
        <div id="background-menu">
            <button class="hamburguer">
                <div id="barra1" class="barra"></div>
                <div id="barra2" class="barra"></div>
                <div id="barra3" class="barra"></div>
            </button>
        </div>


        <nav>
            <ul>
                <li>
                    <a href="{{route('estoque')}}">Estoque</a>
                </li>
                <li>
                    <a href="{{route('calendario')}}" >Calendario</a>
                </li>
                <li>
                    <a href="{{route('contagens')}}">Contagem</a>
                </li>
                <li><a href="{{route('login')}}">Sair</a></li>
            </ul>
        </nav>
    </div>

    <script>
        const abrir_menu = document.getElementsByClassName('hamburguer')[0];
        const menu = document.getElementsByClassName('menu')[0];
        abrir_menu.addEventListener('click', () => {
            abrir_menu.classList.toggle('aberto');
            menu.classList.toggle('ativo');
        });
    </script>
</body>

</html>