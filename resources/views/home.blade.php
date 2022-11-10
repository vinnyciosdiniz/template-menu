@extends('layout')
@section('menu')
    {{-- <div class="topo">
        <div class="menubtn">
            <a href="#"><i class="fa-solid fa-bars"></i></a>
        </div>
    </div> --}}

    {{-- Menu --}}
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
    {{-- tela principal --}}
    <div class="screen">
        {{-- Iniciando Form Dropwdown --}}
        <form action="#" >
            <div class="opcao">
                <label for="especialidade">Especialidade</label>
                <select name="especialidade" id="especialidade">
                <option value="Todas as especialidades">TODAS AS ESPECIALIDADES</option>
                </select>
            </div>
            <div class="opcao">
                <label for="especialidade">Especialidade</label>
                <select name="especialidade" id="especialidade">
                <option value="Todas as especialidades">TODAS AS ESPECIALIDADES</option>
                </select>
            </div>
            <div class="opcao">
                <label for="especialidade">Especialidade</label>
                <select name="especialidade" id="especialidade">
                <option value="Todas as especialidades">TODAS AS ESPECIALIDADES</option>
                </select>
            </div>
        </form>
        <input type="submit" value="Limpar" />
        <input type="submit" value="Buscar" />
        {{-- Fim Form Dropwdown --}}
    </div>
    
        

    <script></script>
@endsection
