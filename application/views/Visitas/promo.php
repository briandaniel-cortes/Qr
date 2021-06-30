<br><br>
<div class="row mb-2">
    <?php if ($Promociones) : ?>
        <?php
        foreach ($Promociones->result() as $worker) {
        ?>
            <div class="col-md-6">
                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <strong class="d-inline-block mb-2 text-primary">Promociones </strong>
                        <h3 class="mb-0">
                            <a class="text-dark" href="#"><?= $worker->promo ?></a>
                        </h3>
                        <p class="card-text mb-auto text-dark">
                            <?= $worker->descripcion ?>
                        </p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#local<?= $worker->id ?>">
                            Ver mas
                        </button>
                    </div>
                    <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="<?php echo ruta; ?>assets//Imagenes/promociones/<?= $worker->fotopromo ?>" data-holder-rendered="true">
                </div>
            </div>
            <div class="modal fade text-center text-dark" id="local<?= $worker->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="card mb-3">
                            <img src="<?php echo ruta; ?>assets//Imagenes/promociones/<?= $worker->fotopromo ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $worker->promo ?></h5>
                                <p class="card-text"><?= $worker->descripcion ?></p>
                                <p class="card-text">Antes <?= $worker->preciofijo ?> pesos</p>
                                <p class="card-text">Ahora <?= $worker->preciodescuento ?> pesos</p>
                                <p class="card-text"><small class="text-muted"><?= $worker->fechainicio ?> a <?= $worker->fechafinal ?></small></p>
                            </div>
                        </div>
                    </div>
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
<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
            <a class="page-link" href="#">Next</a>
        </li>
    </ul>
</nav>