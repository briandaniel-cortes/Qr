<br>
<br><br><br><br>
<center>
    <div class="container cambio3 pequeño text-center">
        <form class="needs-validation" novalidate method="POST" enctype="multipart/form-data" action="<?php echo ruta; ?>/Admon/updatereserva">
            <?php if ($tag) : ?>
                <?php
                foreach ($tag->result() as $worker) {
                ?>
                    <center>
                        <div class="">
                            <div class="col-md-4 mb-3">
                                <input type="hidden" class="form-control" id="validationTooltip01" name="id" value="<?= $worker->id ?>" required>
                                <div class="valid-tooltip">

                                </div>
                                <div class="invalid-tooltip">

                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationTooltip01">Fecha</label>
                                <input type="text" class="form-control" id="validationTooltip01" name="tag" value="<?= $worker->Fecha ?>" required>
                                <div class="valid-tooltip">

                                </div>
                                <div class="invalid-tooltip">

                                </div>
                            </div>

                        <button type="submit" class="btn btn-primary">Actualizar</button>
                        </div>
                    </center>



                <?php } ?>
            <?php else : ?>
                <tr>
                    <td colspan="10">
                        <center>No existen registros</center>
                    </td>
                </tr>
            <?php endif ?>
        </form>
    </div>
</center>
<style>
    .fotogra {
        width: 50%;
    }
</style>