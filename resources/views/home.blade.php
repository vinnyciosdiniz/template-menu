@extends('layout')
@section('menu')
    {{-- <div class="topo">
        <div class="menubtn">
            <a href="#"><i class="fa-solid fa-bars"></i></a>
        </div>
    </div> --}}

    <nav class="sidebar">
        <div class="text">Menu</div>
        <ul>
            <li><a href="#">Opc 1</a></li>
            <li>
                <a href="#" class="dropbtn" onclick="myFunction()">Opc 2
                    <span class="fas fa-caret-down"></span>
                </a>
                <ul id="myDropdown" class="dropdown-content">
                    <li><a href="#">intro 1</a></li>
                    <li><a href="#">intro 2</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="dropbtn" onclick="myFunction()">Opc 3
                    <span class="fas fa-caret-down"></span>
                </a>
                <ul id="myDropdown" class="dropdown-content">
                    <li><a href="#">intro 3</a></li>
                    <li><a href="#">intro 4</a></li>
                </ul>
            </li>
            <li><a href="#">Opc2</a></li>
        </ul>
    </nav>

    <script></script>
@endsection