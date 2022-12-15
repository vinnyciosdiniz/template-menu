@extends('layout3')
@section('menu3')

    <header class="site-header push">This is a header</header>

    <!-- Pushy Menu -->
    <nav class="pushy pushy-left" data-focus="#first-link">
        <div class="pushy-content">
            <ul>
                <li class="pushy-link"><a href="#">Início</a></li>
                <li class="pushy-submenu">
                    <button>Pesquisar</button>
                    <ul>
                        <li class="pushy-link"><a href="#">Admitidos</a></li>
                        <li class="pushy-link"><a href="#">Altas</a></li>
                        <li class="pushy-link"><a href="#">Internados</a></li>
                        <li class="pushy-link"><a href="#">Lista de Espera</a></li>
                    </ul>
                </li>
                <li class="pushy-submenu">
                    <button>Estatisticas</button>
                    <ul>
                        <li class="pushy-link"><a href="#">Item 1</a></li>
                        <li class="pushy-link"><a href="#">Item 2</a></li>
                        <li class="pushy-link"><a href="#">Item 3</a></li>
                    </ul>
                </li>
                <li class="pushy-submenu">
                    <button>Mapa Diário</button>
                    <ul>
                        <li class="pushy-link"><a href="#">Item 1</a></li>
                        <li class="pushy-link"><a href="#">Item 2</a></li>
                        <li class="pushy-link"><a href="#">Item 3</a></li>
                    </ul>
                </li>
                <li class="pushy-link"><a href="#">Declaração</a></li>
                <li class="pushy-link"><a href="#">Sair</a></li>
            </ul>
        </div>
    </nav>

    <!-- Site Overlay -->
    <div class="site-overlay"></div>

    <!-- Your Content -->
    <div id="container">
        <!-- Menu Button -->
        <button class="menu-btn">&#9776; Menu</button>

        <p> Tabela Aqui</p>

    </div>

    <footer class="site-footer push">This is a footer</footer>

    <!-- Pushy JS -->
    <script src="js/pushy.js"></script>

@endsection