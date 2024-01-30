<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('css/estilos.css')?>" />
    <title>Prueba BBDD</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url() ?>ICON.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>ICON.png">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Prompt:wght@600&display=swap" rel="stylesheet">
</head>
<body>
    <?php $session = session();?>
    <nav class="navbar navbar-expand-lg barra-menu">
        <div class="container-fluid">
            <div class="cabecera-menu" onclick="regresarInicio()">
                <image class="logo-menu" src="<?php echo base_url() ?>ICON.png" />
                <h3 class="titulo-menu">WallaPopper</h3>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Artículos
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo base_url() ?>articulos/registro_articulos">Registrar un artículo</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url() ?>">Artículos disponibles</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url() ?>inicio/sobre_nosotros">Sobre nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url() ?>inicio/faq">FAQ</a>
                    </li>
                    <?php 
                        if ($session->get('username') == NULL) {
                            echo('
                            <li class="nav-item">
                                <a class="nav-link" href="'.base_url().'usuarios/iniciar">Iniciar sesión</a>
                            </li>
                            ');
                        } else {
                            echo('
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Cuenta (<b>'.$session->get("username").'</b>)
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="'.base_url().'articulos/listar_uno()">Mis artículos</a></li>
                                    <li><a class="dropdown-item" href="'.base_url().'usuarios/cerrar_sesion">Cerrar sesión</a></li>
                                </ul>
                            </li>
                            ');
                        }
                    ?>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="text-center">
        <!-- <a href="<?php echo base_url() ?>usuarios/registro">Alta de usuario</a>
        <a href="<?php echo base_url() ?>articulos/registro_articulos">Alta de artículo</a>
        <a href="<?php echo base_url() ?>">Listado de artículos</a> -->
        <?php 
            if ($session->get('username') != NULL) {
                echo '<br><h1 class="mensaje-bienv">Bienvenido '.$session->get("username").'</h1>';
            }
        ?>
    </div>