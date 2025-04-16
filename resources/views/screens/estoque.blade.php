<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<body>
    @include('template.header')
    <main>
        <section id="sessao_estoque">
            <form action="" method="">
                <label for="alimento">
                    <h1>Busque um alimento no estoque</h1>
                </label>
                <div class="input-container">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="search" name="alimento" id="alimento" placeholder="Digite o alimento">
                </div>
                <button type="submit">Buscar</button>
            </form>
            </form>

    </main>
    </section>
</body>

</html>
@include('template.footer')