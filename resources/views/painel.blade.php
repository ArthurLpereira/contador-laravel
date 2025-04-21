<h1>Bem-vindo ao Painel!</h1>
<p>Você está logado como {{ Auth::user()->nome_usuario }}</p>

<a href="{{ route('logout') }}">Sair</a>