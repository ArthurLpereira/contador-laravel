@extends('layouts.app')

@section('content')
    <section>
        <div><h1>@yield('TitleForm')</h1></div>
        <form action="" method="POST">
            @csrf
            <input type="text" name="txtlogin" id="txtlogin">

            <input type="text" name="txtsenha" id="txtsenha">

            <button type="submit">@yield('txtbtn')</button>
            <p>@yield('txtopicional')</p>
        </form>
    </section>
@endsection