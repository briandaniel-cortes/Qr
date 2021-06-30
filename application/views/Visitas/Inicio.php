<br><br>
<div class="container trasparente " >
    <h1 class="text-center">Huejutla De Reyes Hidalgo</h1>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo ruta; ?>assets/Imagenes//SitioWeb/panchovaquero.png" class=" w-100 foto" alt="...">
            </div>
            <?php if ($sliderpublico) : ?>
                <?php
                foreach ($sliderpublico->result() as $worker) {
                ?>
                    <div class="carousel-item ">
                        <img src="<?php echo ruta; ?>assets/Imagenes//SitioWeb/panchovaquero.png" class=" w-100 foto" alt="...">
                    </div>
                    <!--slider-->
                <?php } ?>
            <?php else : ?>
                <tr>
                    <td colspan="10">
                        <center>No existen registros</center>
                    </td>
                </tr>
            <?php endif ?>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
