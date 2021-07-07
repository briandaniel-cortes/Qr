<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo ruta; ?>assets/Librerias/Boostrap/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body class="p-3  bg-dark text-white parallax">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fijo">
        <a class="navbar-brand" href="#">
            <img src="<?php echo ruta; ?>assets/Imagenes/SitioWeb/LOGOTIPO.png" alt="..." class="img-thumbnail logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo ruta; ?>Usuarios/">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo ruta; ?>Usuarios/nosotros">Nosotros <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo ruta; ?>Usuarios/sesocio">Se un socio<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo ruta; ?>Usuarios/Promociones">Promociones<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo ruta; ?>Usuarios/Locales">Locales<span class="sr-only">(current)</span></a>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo ruta; ?>Usuarios/cerrar">Cerrar Sesion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo ruta; ?>Usuarios/contactanos">Contactanos</a>
                </li>
            </ul>
        </div>

    </nav>


    <div class="loader"></div>

    
    <div class="">
        <input type="checkbox" id="drawer-toggle" name="drawer-toggle">
        <label for="drawer-toggle" id="drawer-toggle-label"></label>

        <nav id="drawer">
            <?php
            foreach ($breadcrumb as $key => $value) {
                if ($value != '') {
            ?>
                    <a href="" class=" text-white"><?= $key; ?></a><a class=" text-white">/</a>

                <?php } else { ?>
                    <li class="active text-white"><?= $key; ?></li>
            <?php }
            }
            ?>
        </nav>

        