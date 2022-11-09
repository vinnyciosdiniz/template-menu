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

    {{-- Iniciando from dropdown --}}

    <div class="container">
        <h2>Categoria</h2>

        <div class="select-box">
            <div class="options-container acive">
                <div class="option">
                    <input type="radio" class="radio" id="automobiles" name="category">
                    <label for="automobiles">Automobiles</label>
                </div>

                <div class="option">
                    <input type="radio" class="radio" id="science" name="category">
                    <label for="science">Science</label>
                </div>

            </div>
        </div>
        <div class="selected">
            Select video category
            <a><i class="fa-solid fa-arrow-down-to-line"></i></a>
        </div>
        
    </div>
    
    {{-- Fim --}}
        


    <script></script>
@endsection
