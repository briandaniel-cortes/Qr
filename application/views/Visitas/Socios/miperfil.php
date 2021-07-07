<br><br><br><br>
<div class=" cambio color">
    <center>
        <h1 class="text-dark">Mi Perfil </h1>
    </center>


    <br><br><br>

    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://qrtourproyecto.000webhostapp.com/imagenes/fondos.png" class="d-block w-100 foto" alt="...">
                <div class="centrado">

                    <div class=" tam text-dark text-center">
                        Tus locales
                        <p>Hola ¿Como estas? dale clic a las flechas para ver tus locales</p>
                    </div>
                </div>
            </div>
            <?php if ($vermislocales) : ?>
                <?php
                foreach ($vermislocales->result() as $worker) {
                ?>
                    <div class="carousel-item">
                        <img src="<?php echo ruta; ?>assets//Imagenes/locales/<?= $worker->foto ?>" class="d-block w-100 foto" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="tam"><?= $worker->nombrelocal ?></h5>
                            <a href="" class="btn btn-danger tam">Ver local</a>
                        </div>
                    </div>
                <?php } ?>
            <?php else : ?>

                <td colspan="10">
                    <center>No existen registros</center>
                </td>
                </tr>
            <?php endif ?>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only text-dark">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>


    <br><br><br>


<style>
    .cambio {
        background-image: url("https://qrtourproyecto.000webhostapp.com/imagenes/local2.png");
        background-attachment: fixed;
    }

    .color {
        background-color: rgb(252, 232, 167)
    }

    .foto {
        width: 50%;
    }

    .tam {
        font-size: 300%;
    }

    .texto-encima {
        position: absolute;
        top: 10px;
        left: 10px;
    }

    .centrado {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
</style>