<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Document</title>
</head>

<body>
    <main>
        <section id="conjunto-categorias">
            <div>
                <h1>{{ $tipo === 'contagem_categorias' ? 'Contagem' : 'Relatório' }}</h1>
            </div>
            <div id="btns-categorias">
                <button class="btn_contagens">Contagem Ensino Fundamental 1A</button>
                <button class="btn_contagens">Contagem Ensino Fundamental 1B</button>
                <button class="btn_contagens">Contagem Ensino Fundamental 2A</button>
                <button class="btn_contagens">Contagem Ensino Fundamental 2B</button>
                <button class="btn_contagens">Contagem Ensino Médio</button>
            </div>
        </section>
    </main>
</body>

</html>