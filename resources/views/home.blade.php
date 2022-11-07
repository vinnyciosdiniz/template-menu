@extends('layout')
@section('menu')
    {{-- <div class="topo">
        <div class="menubtn">
            <a href="#"><i class="fa-solid fa-bars"></i></a>
        </div>
    </div> --}}

    <nav class="sidebar">
        <div class="text">Me</div>
        <ul id="ul-principal">
            <div>
                <li class="li-p">
                    <a href="#" id="dropbtn" onclick="opc1()">Opc 1
                        <span class="fas fa-caret-down"></span>
                    </a>
                    <ul id="myDropdown1" class="dropdown-content">
                        <li><a href="#" id="opc" onclick="introUm()">intro 1</a></li>
                        <li><a href="#" onclick="introDois()">intro 2</a></li>
                    </ul>
                </li>
            </div>
            <div>
                <li class="li-p">
                    <a href="#" class="dropbtn" onclick="opc2()">Opc 2
                        <span class="fas fa-caret-down"></span>
                    </a>
                    <ul id="myDropdown2" class="dropdown-content">
                        <li><a href="#">intro 1</a></li>
                        <li><a href="#">intro 2</a></li>
                    </ul>
                </li>
            </div>
            <div>
                <li class="li-p">
                    <a href="#" class="dropbtn" onclick="opc3()">Opc 3
                        <span class="fas fa-caret-down"></span>
                    </a>
                    <ul id="myDropdown3" class="dropdown-content">
                        <li><a href="#">intro 1</a></li>
                        <li><a href="#">intro 2</a></li>
                    </ul>
                </li>
            </div>
            <div>
                <li class="li-p">
                    <a href="#" class="dropbtn" onclick="opc4()">Opc 4
                        <span class="fas fa-caret-down"></span>
                    </a>
                    <ul id="myDropdown4" class="dropdown-content">
                        <li><a href="#">intro 1</a></li>
                        <li><a href="#">intro 2</a></li>
                    </ul>
                </li>
            </div>
        </ul>
    </nav>
    {{-- Formulário item 1.1 --}}
    <div class="container" id="form 11">
        <div class="outer">
            <form id="form">
                <div id="page">
                    <label>Form</label>
                    <div class="element">
                        Texto
                        <input type="text" placeholder="Texto">
                    </div>
                </div>
            </form>
        </div>
    </div>
    {{-- Formulário item 1.2 --}}
    <div class="container" id="form 12">
        <div class="outer">
            <form id="form">
                <div id="page">
                    <label>segunda opc</label>
                    <div class="element">
                        dois
                        <input type="text" placeholder="Texto">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script></script>
@endsection
