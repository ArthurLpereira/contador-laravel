@include ('template.header')
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Calendário</title>
</head>
<body>
    <main>
        @include('template.menu')
        <section id="background_calendar">
            <div class="calendar-container">
                <div class="calendar-header">
                    <button onclick="changeMonth(-1)">&#9665;</button>
                    <span id="month-year"></span>
                    <button onclick="changeMonth(1)">&#9655;</button>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>DOMINGO</th>
                            <th>SEGUNDA-FEIRA</th>
                            <th>TERÇA-FEIRA</th>
                            <th>QUARTA-FEIRA</th>
                            <th>QUINTA-FEIRA</th>
                            <th>SEXTA-FEIRA</th>
                            <th>SÁBADO</th>
                        </tr>
                    </thead>
                    <tbody id="calendar-body"></tbody>
                </table>
            </div>
            <div class="selected-day" id="selected-day">Nenhum dia selecionado</div>
        </section>

        <div id="btn_confirmar_dia">
            <button>Concluido</button>
        </div>
    </main>
    <script src="{{asset('js/script.js')}}"></script>
</body>

</html>
@include ('template.footer')