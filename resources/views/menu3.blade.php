@extends('layout3')
@section('menu')
    <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left unfolded"
                data-toggle="menubar">
                <span class="sr-only">Toggle navigation</span>
                <span class="hamburger-bar"></span>
            </button>
            <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse" data-toggle="collapse">
                <i class="icon wb-more-horizontal" aria-hidden="true"></i>
            </button>
            <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-search" data-toggle="collapse">
                <span class="sr-only">Toggle Search</span>
                <i class="icon wb-search" aria-hidden="true"></i>
            </button>
            <div class="navbar-brand navbar-brand-center">
                <!--<img class="navbar-brand-logo" src="https://estacionamento.huufma.br/static/assets/images/logo_black.png" title="Serviço Residencial">-->
                <span class="icon fa-car fa-3x"></span>
                <span class="navbar-brand-text">SIS Estacionamento</span>
            </div>
        </div>

        <div class="navbar-container container-fluid">
            <!-- Navbar Collapse -->
            <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
                <!-- Navbar Toolbar -->
                <ul class="nav navbar-toolbar">
                    <li class="hidden-float" id="toggleMenubar">
                        <a data-toggle="menubar" href="#" role="button">
                            <i class="icon hamburger hamburger-arrow-left unfolded">
                                <span class="sr-only">Toggle menubar</span>
                                <span class="hamburger-bar"></span>
                            </i>
                        </a>
                    </li>
                    <li class="hidden-xs" id="toggleFullscreen">
                        <a class="icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
                            <span class="sr-only">Toggle fullscreen</span>
                        </a>
                    </li>

                </ul>
                <!-- End Navbar Toolbar -->

                <!-- Navbar Toolbar Right -->
                <ul id="nav-toolbar-user" class="nav navbar-toolbar navbar-right navbar-toolbar-right hide">

                    <li class="dropdown">
                        <a class="navbar-avatar dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"
                            data-animation="slide-bottom" role="button">
                            <span class="avatar avatar-online">
                                <img src="https://estacionamento.huufma.br/static/assets/images/user.png" alt="...">
                                <i></i>
                            </span>
                            <label></label>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation">
                                <a href="https://estacionamento.huufma.br/login/sair" role="menuitem"><i
                                        class="icon wb-power" aria-hidden="true"></i> Sair</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- End Navbar Toolbar Right -->
            </div>
            <!-- End Navbar Collapse -->

            <!-- Site Navbar Seach -->
            <div class="collapse navbar-search-overlap" id="site-navbar-search">
                <form role="search">
                    <div class="form-group">
                        <div class="input-search">
                            <i class="input-search-icon wb-search" aria-hidden="true"></i>
                            <input type="text" class="form-control" name="site-search" placeholder="Search...">
                            <button type="button" class="input-search-close icon wb-close"
                                data-target="#site-navbar-search" data-toggle="collapse" aria-label="Close"></button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- End Site Navbar Seach -->
        </div>
    </nav>
    <!-- menu lateral -->
    <div class="site-menubar hide">
        <div class="site-menubar-body">
            <div>
                <div>
                    <ul class="site-menu">
                        <li class="site-menu-category">Menu Principal</li>
                        <li class="site-menu-item">
                            <a href="https://estacionamento.huufma.br/cadastrar" data-slug="cad">
                                <i class="site-menu-icon wb-add-file" aria-hidden="true"></i>
                                <span class="site-menu-title">Cadastro</span>
                            </a>
                        </li>
                </div>
            </div>
        </div>
    </div>
@endsection
