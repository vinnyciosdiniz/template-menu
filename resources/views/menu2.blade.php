@extends('layout2')
@section('menu')
    <h1>Menu</h1>

    <nav class="nav">
        <ul>
            <li><a href="#">Start</a>
            <li><a href="#">O nas</a>
            <li class="drop"><a href="#">Oferta</a>
                <ul class="dropdown">
                    <li><a href="#">Oferta 01</a></li>
                    <li><a href="#">Oferta 02</a></li>
                    <li><a href="#">Oferta 03</a></li>
                </ul>
            </li>
            <li><a href="#">Opc1</a>
            <li><a href="#">Opc2</a>
        </ul>
    </nav>

    <footer>
        <p class="main">
            2022
        </p>
    </footer>
@endsection
