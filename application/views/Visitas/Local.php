<br><br>
<div class="trasparente ">
    <h1 class="text-center"> Locales</h1>
 <center>
    <div class="locales parallax2">
        <h4>Categorias</h4>
    <a href="<?php echo ruta; ?>Welcome/Locales/1" class="badge badge-dark"><h4>Comida</h4></a>
    <a href="<?php echo ruta; ?>Welcome/Locales/2" class="badge badge-dark"><h4>Ropa</h4></a>
    <a href="<?php echo ruta; ?>Welcome/Locales/3" class="badge badge-dark"><h4>Zapatos</h4></a>
    <a href="<?php echo ruta; ?>Welcome/Locales/4" class="badge badge-dark"><h4>Turismo</h4></a>
<br><br><br>
<h4>Tags</h4>

    <?php if ($tags) : ?>
        <?php
        foreach ($tags->result() as $worker) {
        ?>
               <a href="<?php echo ruta; ?>Welcome/Locales/1" class="badge badge-dark"><h6><?= $worker->tag; ?></h6   ></a>
            
        <?php } ?>
    <?php else : ?>
        <tr>
            <td colspan="10">
                <center>No existen registros</center>
            </td>
        </tr>
    <?php endif ?>
<div class="row mb-2"> 
    <?php if ($localeslista) : ?>
        <?php
        foreach ($localeslista->result() as $worker) {
        ?>
            <div class="col-md-6">
                <div class="card flex-md-row mb-5 box-shadow h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <strong class="d-inline-block mb-5 text-primary">Local</strong>
                        <h3 class="mb-0">
                            <a class="text-dark" href="#"><?= $worker->nombrelocal ?></a>
                        </h3>
                        <p class="text-justify  text-dark">
                        <?= $worker->Descripciondellocal ?>
                        </p>
                        <a href="<?php echo ruta; ?>Welcome/Detallelocal/<?= $worker->id?>">Ver mas</a>
                    </div>
                    <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_179b4ac8ad4%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_179b4ac8ad4%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.1953125%22%20y%3D%22131%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                </div>
            </div>
            
        <?php } ?>
    <?php else : ?>
        <tr>
            <td colspan="10">
                <center>No existen registros</center>
            </td>
        </tr>
    <?php endif ?>
</div>
    </div>
    </center>
</div>